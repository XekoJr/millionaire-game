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

            return response()->json($questions);
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

            return response()->json($question);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Could not fetch question', 'message' => $this->safeMessage($e)], 500);
        }
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
