<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Question;

class QuestionController extends Controller
{
    // Get all questions, with optional difficulty filter
    public function index(Request $request)
    {
        try {
            $difficulty = $request->query('difficulty');

            if ($difficulty !== null && (!is_numeric($difficulty) || $difficulty < 1 || $difficulty > 15)) {
                return response()->json(['error' => 'Invalid difficulty value'], 400);
            }

            $questions = Question::when($difficulty, function ($query, $difficulty) {
                return $query->where('difficulty', $difficulty);
            })->get();

            return response()->json($questions->map(fn ($q) => $this->hideCorrect($q)));
        } catch (\Exception $e) {
            return response()->json(['error' => 'Could not fetch questions', 'message' => $this->safeMessage($e)], 500);
        }
    }

    // Get a specific question by ID
    public function show($id)
    {
        try {
            $question = Question::find($id);

            if (!$question) {
                return response()->json(['error' => 'Question not found'], 404);
            }

            return response()->json($this->hideCorrect($question));
        } catch (\Exception $e) {
            return response()->json(['error' => 'Could not fetch question', 'message' => $this->safeMessage($e)], 500);
        }
    }

    // Check a selected option server-side — gameplay never learns which
    // option is correct from index/show, only from having actually answered.
    public function checkAnswer(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'optionIndex' => 'required|integer|min:0|max:3',
            ]);

            $question = Question::find($id);
            if (!$question) {
                return response()->json(['error' => 'Question not found'], 404);
            }

            $options = $question->options;
            $correctIndex = $this->correctIndex($options);

            return response()->json([
                'correct' => $validated['optionIndex'] === $correctIndex,
                'correctIndex' => $correctIndex,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Could not check answer', 'message' => $this->safeMessage($e)], 500);
        }
    }

    // Server-computed lifelines — "fifty" removes 2 random wrong options,
    // "phone" reveals all wrong options (i.e. narrows it to the correct
    // one), same behaviour the frontend used to compute itself by reading
    // the (now-hidden) correct flag directly.
    public function hint(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'type' => 'required|in:fifty,phone',
            ]);

            $question = Question::find($id);
            if (!$question) {
                return response()->json(['error' => 'Question not found'], 404);
            }

            $options = $question->options;
            $correctIndex = $this->correctIndex($options);
            $wrongIndexes = array_values(array_diff(range(0, count($options) - 1), [$correctIndex]));

            if ($validated['type'] === 'fifty') {
                shuffle($wrongIndexes);
                $eliminate = array_slice($wrongIndexes, 0, 2);
            } else {
                $eliminate = $wrongIndexes;
            }

            return response()->json(['eliminate' => array_values($eliminate)]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Could not compute hint', 'message' => $this->safeMessage($e)], 500);
        }
    }

    // Strips the `correct` flag from every option before a question is sent
    // to a client that hasn't answered yet (index/show are public/unauthed).
    private function hideCorrect(Question $question): array
    {
        $data = $question->toArray();
        $data['options'] = array_map(function ($option) {
            unset($option['correct']);
            return $option;
        }, $data['options']);
        return $data;
    }

    private function correctIndex(array $options): int
    {
        foreach ($options as $index => $option) {
            if ($option['correct'] === true) {
                return $index;
            }
        }
        throw new \Exception('Question has no correct option configured');
    }

    // Add a new question
    public function store(Request $request)
    {
        try {
            $validated = $this->validateQuestion($request);

            $question = Question::create($validated);
            return response()->json($question, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Could not create question', 'message' => $this->safeMessage($e)], 500);
        }
    }

    // Update an existing question
    public function update(Request $request, $id)
    {
        try {
            $question = Question::find($id);

            if (!$question) {
                return response()->json(['error' => 'Question not found'], 404);
            }

            $validated = $this->validateQuestion($request, $id);

            // Check for duplicate question
            $existingQuestion = Question::where('question', $validated['question'])->where('id', '!=', $id)->first();
            if ($existingQuestion) {
                return response()->json(['error' => 'Duplicate question'], 400);
            }

            $question = Question::findOrFail($id);

            $question->update($validated);

            return response()->json($question);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Could not update question', 'message' => $this->safeMessage($e)], 500);
        }
    }

    // Delete a question
    public function destroy($id)
    {
        try {
            $question = Question::find($id);

            if (!$question) {
                return response()->json(['error' => 'Question not found'], 404);
            }

            $question->delete();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Could not delete question', 'message' => $this->safeMessage($e)], 500);
        }
    }

    // Logs the real exception and returns only the message to the client when it's
    // one of our own validation/business-rule exceptions — never raw DB/system errors.
    private function safeMessage(\Exception $e): string
    {
        Log::error($e);

        if ($e instanceof \Illuminate\Validation\ValidationException) {
            return $e->validator->errors()->first();
        }

        $safeMessages = ['There must be exactly one correct answer', 'Duplicate question'];
        if (in_array($e->getMessage(), $safeMessages, true)) {
            return $e->getMessage();
        }

        return 'An unexpected error occurred';
    }

    // Validate question data
    private function validateQuestion(Request $request, $id = null)
    {
        $validated = $request->validate([
            'question' => 'required|string',
            'options' => 'required|array|size:4',
            'options.*.answer' => 'required|string',
            'options.*.correct' => 'required|boolean',
            'difficulty' => 'required|integer|between:1,15',
            'author' => 'required|string',
        ]);

        $correctOptions = array_filter($validated['options'], function ($option) {
            return $option['correct'] === true;
        });

        if (count($correctOptions) !== 1) {
            throw new \Exception('There must be exactly one correct answer');
        }

        if ($id === null) {
            $existingQuestion = Question::where('question', $validated['question'])->first();
            if ($existingQuestion) {
                throw new \Exception('Duplicate question');
            }
        }

        return $validated;
    }
}
