<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Seed 30 trivia questions — 2 per prize level (levels 1-15, matching the
     * game's difficulty range), roughly increasing in obscurity as the level
     * goes up, same as the real "Who Wants to Be a Millionaire" ladder.
     */
    public function run(): void
    {
        $questions = [
            // Level 1
            ['question' => 'What color do you get by mixing blue and yellow?', 'difficulty' => 1, 'options' => [
                ['answer' => 'Green', 'correct' => true],
                ['answer' => 'Purple', 'correct' => false],
                ['answer' => 'Orange', 'correct' => false],
                ['answer' => 'Brown', 'correct' => false],
            ]],
            ['question' => 'How many days are there in a week?', 'difficulty' => 1, 'options' => [
                ['answer' => '7', 'correct' => true],
                ['answer' => '5', 'correct' => false],
                ['answer' => '10', 'correct' => false],
                ['answer' => '30', 'correct' => false],
            ]],
            // Level 2
            ['question' => 'What is the capital of Portugal?', 'difficulty' => 2, 'options' => [
                ['answer' => 'Lisbon', 'correct' => true],
                ['answer' => 'Porto', 'correct' => false],
                ['answer' => 'Madrid', 'correct' => false],
                ['answer' => 'Coimbra', 'correct' => false],
            ]],
            ['question' => 'Which animal is known as "man\'s best friend"?', 'difficulty' => 2, 'options' => [
                ['answer' => 'Dog', 'correct' => true],
                ['answer' => 'Cat', 'correct' => false],
                ['answer' => 'Horse', 'correct' => false],
                ['answer' => 'Parrot', 'correct' => false],
            ]],
            // Level 3
            ['question' => 'How many continents are there on Earth?', 'difficulty' => 3, 'options' => [
                ['answer' => '7', 'correct' => true],
                ['answer' => '5', 'correct' => false],
                ['answer' => '6', 'correct' => false],
                ['answer' => '8', 'correct' => false],
            ]],
            ['question' => 'What is the largest planet in our solar system?', 'difficulty' => 3, 'options' => [
                ['answer' => 'Jupiter', 'correct' => true],
                ['answer' => 'Saturn', 'correct' => false],
                ['answer' => 'Earth', 'correct' => false],
                ['answer' => 'Neptune', 'correct' => false],
            ]],
            // Level 4
            ['question' => 'Who painted the Mona Lisa?', 'difficulty' => 4, 'options' => [
                ['answer' => 'Leonardo da Vinci', 'correct' => true],
                ['answer' => 'Pablo Picasso', 'correct' => false],
                ['answer' => 'Vincent van Gogh', 'correct' => false],
                ['answer' => 'Michelangelo', 'correct' => false],
            ]],
            ['question' => 'What is the chemical symbol for water?', 'difficulty' => 4, 'options' => [
                ['answer' => 'H2O', 'correct' => true],
                ['answer' => 'CO2', 'correct' => false],
                ['answer' => 'O2', 'correct' => false],
                ['answer' => 'NaCl', 'correct' => false],
            ]],
            // Level 5
            ['question' => 'Which ocean is the largest in the world?', 'difficulty' => 5, 'options' => [
                ['answer' => 'Pacific Ocean', 'correct' => true],
                ['answer' => 'Atlantic Ocean', 'correct' => false],
                ['answer' => 'Indian Ocean', 'correct' => false],
                ['answer' => 'Arctic Ocean', 'correct' => false],
            ]],
            ['question' => 'In which year did the Titanic sink?', 'difficulty' => 5, 'options' => [
                ['answer' => '1912', 'correct' => true],
                ['answer' => '1905', 'correct' => false],
                ['answer' => '1920', 'correct' => false],
                ['answer' => '1931', 'correct' => false],
            ]],
            // Level 6
            ['question' => 'What is the smallest country in the world by area?', 'difficulty' => 6, 'options' => [
                ['answer' => 'Vatican City', 'correct' => true],
                ['answer' => 'Monaco', 'correct' => false],
                ['answer' => 'San Marino', 'correct' => false],
                ['answer' => 'Liechtenstein', 'correct' => false],
            ]],
            ['question' => 'Which element has the chemical symbol "Fe"?', 'difficulty' => 6, 'options' => [
                ['answer' => 'Iron', 'correct' => true],
                ['answer' => 'Fluorine', 'correct' => false],
                ['answer' => 'Lead', 'correct' => false],
                ['answer' => 'Tin', 'correct' => false],
            ]],
            // Level 7
            ['question' => 'Who wrote the play "Romeo and Juliet"?', 'difficulty' => 7, 'options' => [
                ['answer' => 'William Shakespeare', 'correct' => true],
                ['answer' => 'Charles Dickens', 'correct' => false],
                ['answer' => 'Jane Austen', 'correct' => false],
                ['answer' => 'Mark Twain', 'correct' => false],
            ]],
            ['question' => 'What is the longest river in the world?', 'difficulty' => 7, 'options' => [
                ['answer' => 'Nile', 'correct' => true],
                ['answer' => 'Amazon', 'correct' => false],
                ['answer' => 'Yangtze', 'correct' => false],
                ['answer' => 'Mississippi', 'correct' => false],
            ]],
            // Level 8
            ['question' => 'Which country gifted the Statue of Liberty to the United States?', 'difficulty' => 8, 'options' => [
                ['answer' => 'France', 'correct' => true],
                ['answer' => 'United Kingdom', 'correct' => false],
                ['answer' => 'Spain', 'correct' => false],
                ['answer' => 'Italy', 'correct' => false],
            ]],
            ['question' => 'What is the hardest natural substance on Earth?', 'difficulty' => 8, 'options' => [
                ['answer' => 'Diamond', 'correct' => true],
                ['answer' => 'Quartz', 'correct' => false],
                ['answer' => 'Granite', 'correct' => false],
                ['answer' => 'Titanium', 'correct' => false],
            ]],
            // Level 9
            ['question' => 'Who was the first person to walk on the Moon?', 'difficulty' => 9, 'options' => [
                ['answer' => 'Neil Armstrong', 'correct' => true],
                ['answer' => 'Buzz Aldrin', 'correct' => false],
                ['answer' => 'Yuri Gagarin', 'correct' => false],
                ['answer' => 'John Glenn', 'correct' => false],
            ]],
            ['question' => 'Which composer wrote the "Ninth Symphony" while completely deaf?', 'difficulty' => 9, 'options' => [
                ['answer' => 'Ludwig van Beethoven', 'correct' => true],
                ['answer' => 'Wolfgang Amadeus Mozart', 'correct' => false],
                ['answer' => 'Johann Sebastian Bach', 'correct' => false],
                ['answer' => 'Franz Schubert', 'correct' => false],
            ]],
            // Level 10
            ['question' => 'What is the currency of Japan?', 'difficulty' => 10, 'options' => [
                ['answer' => 'Yen', 'correct' => true],
                ['answer' => 'Won', 'correct' => false],
                ['answer' => 'Yuan', 'correct' => false],
                ['answer' => 'Ringgit', 'correct' => false],
            ]],
            ['question' => 'Which planet is known for its prominent ring system?', 'difficulty' => 10, 'options' => [
                ['answer' => 'Saturn', 'correct' => true],
                ['answer' => 'Jupiter', 'correct' => false],
                ['answer' => 'Uranus', 'correct' => false],
                ['answer' => 'Mars', 'correct' => false],
            ]],
            // Level 11
            ['question' => 'In Greek mythology, who is the king of the gods?', 'difficulty' => 11, 'options' => [
                ['answer' => 'Zeus', 'correct' => true],
                ['answer' => 'Poseidon', 'correct' => false],
                ['answer' => 'Hades', 'correct' => false],
                ['answer' => 'Apollo', 'correct' => false],
            ]],
            ['question' => 'What is the smallest bone in the human body?', 'difficulty' => 11, 'options' => [
                ['answer' => 'Stapes', 'correct' => true],
                ['answer' => 'Femur', 'correct' => false],
                ['answer' => 'Radius', 'correct' => false],
                ['answer' => 'Patella', 'correct' => false],
            ]],
            // Level 12
            ['question' => 'Which country has the most natural lakes in the world?', 'difficulty' => 12, 'options' => [
                ['answer' => 'Canada', 'correct' => true],
                ['answer' => 'Russia', 'correct' => false],
                ['answer' => 'United States', 'correct' => false],
                ['answer' => 'Finland', 'correct' => false],
            ]],
            ['question' => 'Who developed the theory of general relativity?', 'difficulty' => 12, 'options' => [
                ['answer' => 'Albert Einstein', 'correct' => true],
                ['answer' => 'Isaac Newton', 'correct' => false],
                ['answer' => 'Niels Bohr', 'correct' => false],
                ['answer' => 'Galileo Galilei', 'correct' => false],
            ]],
            // Level 13
            ['question' => 'What was the first programming language considered "high-level", released in 1957?', 'difficulty' => 13, 'options' => [
                ['answer' => 'FORTRAN', 'correct' => true],
                ['answer' => 'COBOL', 'correct' => false],
                ['answer' => 'BASIC', 'correct' => false],
                ['answer' => 'ALGOL', 'correct' => false],
            ]],
            ['question' => 'Which dynasty built the Forbidden City in Beijing?', 'difficulty' => 13, 'options' => [
                ['answer' => 'Ming Dynasty', 'correct' => true],
                ['answer' => 'Qing Dynasty', 'correct' => false],
                ['answer' => 'Tang Dynasty', 'correct' => false],
                ['answer' => 'Han Dynasty', 'correct' => false],
            ]],
            // Level 14
            ['question' => 'What is the rarest blood type in humans?', 'difficulty' => 14, 'options' => [
                ['answer' => 'AB negative', 'correct' => true],
                ['answer' => 'O negative', 'correct' => false],
                ['answer' => 'B negative', 'correct' => false],
                ['answer' => 'A negative', 'correct' => false],
            ]],
            ['question' => 'Which battle is considered Napoleon\'s final defeat, in 1815?', 'difficulty' => 14, 'options' => [
                ['answer' => 'Waterloo', 'correct' => true],
                ['answer' => 'Austerlitz', 'correct' => false],
                ['answer' => 'Trafalgar', 'correct' => false],
                ['answer' => 'Leipzig', 'correct' => false],
            ]],
            // Level 15 (top prize)
            ['question' => 'What is the only mammal capable of true sustained flight?', 'difficulty' => 15, 'options' => [
                ['answer' => 'Bat', 'correct' => true],
                ['answer' => 'Flying squirrel', 'correct' => false],
                ['answer' => 'Colugo', 'correct' => false],
                ['answer' => 'Sugar glider', 'correct' => false],
            ]],
            ['question' => 'Which mathematician is credited with proving Fermat\'s Last Theorem, in 1994?', 'difficulty' => 15, 'options' => [
                ['answer' => 'Andrew Wiles', 'correct' => true],
                ['answer' => 'Grigori Perelman', 'correct' => false],
                ['answer' => 'John Nash', 'correct' => false],
                ['answer' => 'Terence Tao', 'correct' => false],
            ]],
        ];

        foreach ($questions as $q) {
            Question::create([
                'question' => $q['question'],
                'options' => $q['options'],
                'difficulty' => $q['difficulty'],
                'author' => 'Seeder',
            ]);
        }
    }
}
