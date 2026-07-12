<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class Questions100Seeder extends Seeder
{
    /**
     * Seeds 100 additional trivia questions across difficulty levels 1-15,
     * roughly increasing in obscurity as the level goes up. Correct answer
     * position is intentionally varied across all four option slots.
     * Run with: php artisan db:seed --class=Questions100Seeder
     */
    public function run(): void
    {
        $questions = [
            // ---------- Level 1 (7 questions) ----------
            ['question' => 'How many legs does a spider have?', 'difficulty' => 1, 'options' => [
                ['answer' => '6', 'correct' => false],
                ['answer' => '8', 'correct' => true],
                ['answer' => '10', 'correct' => false],
                ['answer' => '4', 'correct' => false],
            ]],
            ['question' => 'What is the opposite of "hot"?', 'difficulty' => 1, 'options' => [
                ['answer' => 'Warm', 'correct' => false],
                ['answer' => 'Cool', 'correct' => false],
                ['answer' => 'Cold', 'correct' => true],
                ['answer' => 'Mild', 'correct' => false],
            ]],
            ['question' => 'Which fruit is typically yellow and curved?', 'difficulty' => 1, 'options' => [
                ['answer' => 'Apple', 'correct' => false],
                ['answer' => 'Banana', 'correct' => true],
                ['answer' => 'Grape', 'correct' => false],
                ['answer' => 'Cherry', 'correct' => false],
            ]],
            ['question' => 'How many months are there in a year?', 'difficulty' => 1, 'options' => [
                ['answer' => '10', 'correct' => false],
                ['answer' => '11', 'correct' => false],
                ['answer' => '13', 'correct' => false],
                ['answer' => '12', 'correct' => true],
            ]],
            ['question' => 'What do bees produce?', 'difficulty' => 1, 'options' => [
                ['answer' => 'Milk', 'correct' => false],
                ['answer' => 'Honey', 'correct' => true],
                ['answer' => 'Silk', 'correct' => false],
                ['answer' => 'Wax only', 'correct' => false],
            ]],
            ['question' => 'What is the largest planet in our solar system?', 'difficulty' => 1, 'options' => [
                ['answer' => 'Jupiter', 'correct' => true],
                ['answer' => 'Saturn', 'correct' => false],
                ['answer' => 'Earth', 'correct' => false],
                ['answer' => 'Mars', 'correct' => false],
            ]],
            ['question' => 'Which shape has three sides?', 'difficulty' => 1, 'options' => [
                ['answer' => 'Square', 'correct' => false],
                ['answer' => 'Circle', 'correct' => false],
                ['answer' => 'Triangle', 'correct' => true],
                ['answer' => 'Pentagon', 'correct' => false],
            ]],

            // ---------- Level 2 (7 questions) ----------
            ['question' => 'What is the capital of France?', 'difficulty' => 2, 'options' => [
                ['answer' => 'Berlin', 'correct' => false],
                ['answer' => 'Madrid', 'correct' => false],
                ['answer' => 'Paris', 'correct' => true],
                ['answer' => 'Rome', 'correct' => false],
            ]],
            ['question' => 'Which ocean is the largest on Earth?', 'difficulty' => 2, 'options' => [
                ['answer' => 'Atlantic Ocean', 'correct' => false],
                ['answer' => 'Indian Ocean', 'correct' => false],
                ['answer' => 'Arctic Ocean', 'correct' => false],
                ['answer' => 'Pacific Ocean', 'correct' => true],
            ]],
            ['question' => 'How many players are on a standard soccer team on the field?', 'difficulty' => 2, 'options' => [
                ['answer' => '9', 'correct' => false],
                ['answer' => '11', 'correct' => true],
                ['answer' => '10', 'correct' => false],
                ['answer' => '12', 'correct' => false],
            ]],
            ['question' => 'What gas do plants absorb from the atmosphere?', 'difficulty' => 2, 'options' => [
                ['answer' => 'Oxygen', 'correct' => false],
                ['answer' => 'Nitrogen', 'correct' => false],
                ['answer' => 'Carbon dioxide', 'correct' => true],
                ['answer' => 'Hydrogen', 'correct' => false],
            ]],
            ['question' => 'Who wrote "Romeo and Juliet"?', 'difficulty' => 2, 'options' => [
                ['answer' => 'Charles Dickens', 'correct' => false],
                ['answer' => 'William Shakespeare', 'correct' => true],
                ['answer' => 'Jane Austen', 'correct' => false],
                ['answer' => 'Mark Twain', 'correct' => false],
            ]],
            ['question' => 'What is the tallest mountain in the world?', 'difficulty' => 2, 'options' => [
                ['answer' => 'K2', 'correct' => false],
                ['answer' => 'Kilimanjaro', 'correct' => false],
                ['answer' => 'Mount Everest', 'correct' => true],
                ['answer' => 'Denali', 'correct' => false],
            ]],
            ['question' => 'Which planet is known as the Red Planet?', 'difficulty' => 2, 'options' => [
                ['answer' => 'Venus', 'correct' => false],
                ['answer' => 'Mars', 'correct' => true],
                ['answer' => 'Mercury', 'correct' => false],
                ['answer' => 'Saturn', 'correct' => false],
            ]],

            // ---------- Level 3 (7 questions) ----------
            ['question' => 'What is the chemical symbol for gold?', 'difficulty' => 3, 'options' => [
                ['answer' => 'Gd', 'correct' => false],
                ['answer' => 'Go', 'correct' => false],
                ['answer' => 'Au', 'correct' => true],
                ['answer' => 'Ag', 'correct' => false],
            ]],
            ['question' => 'In which country would you find the Great Barrier Reef?', 'difficulty' => 3, 'options' => [
                ['answer' => 'Brazil', 'correct' => false],
                ['answer' => 'Australia', 'correct' => true],
                ['answer' => 'Mexico', 'correct' => false],
                ['answer' => 'Thailand', 'correct' => false],
            ]],
            ['question' => 'How many bones are there in the adult human body?', 'difficulty' => 3, 'options' => [
                ['answer' => '206', 'correct' => true],
                ['answer' => '186', 'correct' => false],
                ['answer' => '226', 'correct' => false],
                ['answer' => '196', 'correct' => false],
            ]],
            ['question' => 'Which artist painted the Mona Lisa?', 'difficulty' => 3, 'options' => [
                ['answer' => 'Vincent van Gogh', 'correct' => false],
                ['answer' => 'Pablo Picasso', 'correct' => false],
                ['answer' => 'Michelangelo', 'correct' => false],
                ['answer' => 'Leonardo da Vinci', 'correct' => true],
            ]],
            ['question' => 'What is the currency of Japan?', 'difficulty' => 3, 'options' => [
                ['answer' => 'Yuan', 'correct' => false],
                ['answer' => 'Won', 'correct' => false],
                ['answer' => 'Yen', 'correct' => true],
                ['answer' => 'Ringgit', 'correct' => false],
            ]],
            ['question' => 'Which organ pumps blood through the human body?', 'difficulty' => 3, 'options' => [
                ['answer' => 'Liver', 'correct' => false],
                ['answer' => 'Heart', 'correct' => true],
                ['answer' => 'Lungs', 'correct' => false],
                ['answer' => 'Kidney', 'correct' => false],
            ]],
            ['question' => 'What is the smallest country in the world by area?', 'difficulty' => 3, 'options' => [
                ['answer' => 'Monaco', 'correct' => false],
                ['answer' => 'San Marino', 'correct' => false],
                ['answer' => 'Vatican City', 'correct' => true],
                ['answer' => 'Liechtenstein', 'correct' => false],
            ]],

            // ---------- Level 4 (7 questions) ----------
            ['question' => 'Which planet has the most moons in our solar system?', 'difficulty' => 4, 'options' => [
                ['answer' => 'Jupiter', 'correct' => false],
                ['answer' => 'Saturn', 'correct' => true],
                ['answer' => 'Neptune', 'correct' => false],
                ['answer' => 'Uranus', 'correct' => false],
            ]],
            ['question' => 'Who developed the theory of general relativity?', 'difficulty' => 4, 'options' => [
                ['answer' => 'Isaac Newton', 'correct' => false],
                ['answer' => 'Niels Bohr', 'correct' => false],
                ['answer' => 'Albert Einstein', 'correct' => true],
                ['answer' => 'Galileo Galilei', 'correct' => false],
            ]],
            ['question' => 'What is the longest river in the world?', 'difficulty' => 4, 'options' => [
                ['answer' => 'Amazon River', 'correct' => false],
                ['answer' => 'Nile River', 'correct' => true],
                ['answer' => 'Yangtze River', 'correct' => false],
                ['answer' => 'Mississippi River', 'correct' => false],
            ]],
            ['question' => 'In Greek mythology, who is the king of the gods?', 'difficulty' => 4, 'options' => [
                ['answer' => 'Poseidon', 'correct' => false],
                ['answer' => 'Hades', 'correct' => false],
                ['answer' => 'Apollo', 'correct' => false],
                ['answer' => 'Zeus', 'correct' => true],
            ]],
            ['question' => 'Which country invented paper?', 'difficulty' => 4, 'options' => [
                ['answer' => 'Egypt', 'correct' => false],
                ['answer' => 'China', 'correct' => true],
                ['answer' => 'Greece', 'correct' => false],
                ['answer' => 'India', 'correct' => false],
            ]],
            ['question' => 'What does "www" stand for in a website address?', 'difficulty' => 4, 'options' => [
                ['answer' => 'World Wide Web', 'correct' => true],
                ['answer' => 'World Web Wide', 'correct' => false],
                ['answer' => 'Web World Wide', 'correct' => false],
                ['answer' => 'Wide World Web', 'correct' => false],
            ]],
            ['question' => 'Which element has the chemical symbol "Fe"?', 'difficulty' => 4, 'options' => [
                ['answer' => 'Fluorine', 'correct' => false],
                ['answer' => 'Iron', 'correct' => true],
                ['answer' => 'Francium', 'correct' => false],
                ['answer' => 'Lead', 'correct' => false],
            ]],

            // ---------- Level 5 (7 questions) ----------
            ['question' => 'Who was the first President of the United States?', 'difficulty' => 5, 'options' => [
                ['answer' => 'Thomas Jefferson', 'correct' => false],
                ['answer' => 'John Adams', 'correct' => false],
                ['answer' => 'George Washington', 'correct' => true],
                ['answer' => 'Abraham Lincoln', 'correct' => false],
            ]],
            ['question' => 'What is the hardest natural substance on Earth?', 'difficulty' => 5, 'options' => [
                ['answer' => 'Quartz', 'correct' => false],
                ['answer' => 'Diamond', 'correct' => true],
                ['answer' => 'Titanium', 'correct' => false],
                ['answer' => 'Granite', 'correct' => false],
            ]],
            ['question' => 'Which country gifted the Statue of Liberty to the United States?', 'difficulty' => 5, 'options' => [
                ['answer' => 'United Kingdom', 'correct' => false],
                ['answer' => 'Spain', 'correct' => false],
                ['answer' => 'Italy', 'correct' => false],
                ['answer' => 'France', 'correct' => true],
            ]],
            ['question' => 'What is the study of earthquakes called?', 'difficulty' => 5, 'options' => [
                ['answer' => 'Seismology', 'correct' => true],
                ['answer' => 'Meteorology', 'correct' => false],
                ['answer' => 'Volcanology', 'correct' => false],
                ['answer' => 'Geology only', 'correct' => false],
            ]],
            ['question' => 'Which composer wrote the "Ninth Symphony" while almost completely deaf?', 'difficulty' => 5, 'options' => [
                ['answer' => 'Wolfgang Amadeus Mozart', 'correct' => false],
                ['answer' => 'Johann Sebastian Bach', 'correct' => false],
                ['answer' => 'Ludwig van Beethoven', 'correct' => true],
                ['answer' => 'Franz Schubert', 'correct' => false],
            ]],
            ['question' => 'What is the main language spoken in Brazil?', 'difficulty' => 5, 'options' => [
                ['answer' => 'Spanish', 'correct' => false],
                ['answer' => 'Portuguese', 'correct' => true],
                ['answer' => 'French', 'correct' => false],
                ['answer' => 'Italian', 'correct' => false],
            ]],
            ['question' => 'Which gas makes up the largest percentage of the Earth\'s atmosphere?', 'difficulty' => 5, 'options' => [
                ['answer' => 'Oxygen', 'correct' => false],
                ['answer' => 'Carbon dioxide', 'correct' => false],
                ['answer' => 'Nitrogen', 'correct' => true],
                ['answer' => 'Argon', 'correct' => false],
            ]],

            // ---------- Level 6 (7 questions) ----------
            ['question' => 'Which war was fought between the North and South regions of the United States?', 'difficulty' => 6, 'options' => [
                ['answer' => 'Revolutionary War', 'correct' => false],
                ['answer' => 'Civil War', 'correct' => true],
                ['answer' => 'War of 1812', 'correct' => false],
                ['answer' => 'Spanish-American War', 'correct' => false],
            ]],
            ['question' => 'What is the powerhouse of the cell called?', 'difficulty' => 6, 'options' => [
                ['answer' => 'Nucleus', 'correct' => false],
                ['answer' => 'Ribosome', 'correct' => false],
                ['answer' => 'Mitochondria', 'correct' => true],
                ['answer' => 'Golgi apparatus', 'correct' => false],
            ]],
            ['question' => 'Which author wrote "1984" and "Animal Farm"?', 'difficulty' => 6, 'options' => [
                ['answer' => 'Aldous Huxley', 'correct' => false],
                ['answer' => 'George Orwell', 'correct' => true],
                ['answer' => 'Ray Bradbury', 'correct' => false],
                ['answer' => 'H.G. Wells', 'correct' => false],
            ]],
            ['question' => 'What is the capital city of Canada?', 'difficulty' => 6, 'options' => [
                ['answer' => 'Toronto', 'correct' => false],
                ['answer' => 'Vancouver', 'correct' => false],
                ['answer' => 'Montreal', 'correct' => false],
                ['answer' => 'Ottawa', 'correct' => true],
            ]],
            ['question' => 'Which scientist proposed the theory of evolution by natural selection?', 'difficulty' => 6, 'options' => [
                ['answer' => 'Gregor Mendel', 'correct' => false],
                ['answer' => 'Charles Darwin', 'correct' => true],
                ['answer' => 'Louis Pasteur', 'correct' => false],
                ['answer' => 'Alfred Wallace', 'correct' => false],
            ]],
            ['question' => 'What is the largest desert in the world (including polar deserts)?', 'difficulty' => 6, 'options' => [
                ['answer' => 'Sahara Desert', 'correct' => false],
                ['answer' => 'Gobi Desert', 'correct' => false],
                ['answer' => 'Antarctic Desert', 'correct' => true],
                ['answer' => 'Arabian Desert', 'correct' => false],
            ]],
            ['question' => 'Which two elements combine to form water?', 'difficulty' => 6, 'options' => [
                ['answer' => 'Hydrogen and Oxygen', 'correct' => true],
                ['answer' => 'Carbon and Oxygen', 'correct' => false],
                ['answer' => 'Nitrogen and Hydrogen', 'correct' => false],
                ['answer' => 'Helium and Oxygen', 'correct' => false],
            ]],

            // ---------- Level 7 (7 questions) ----------
            ['question' => 'Which empire built Machu Picchu?', 'difficulty' => 7, 'options' => [
                ['answer' => 'Aztec Empire', 'correct' => false],
                ['answer' => 'Maya Empire', 'correct' => false],
                ['answer' => 'Inca Empire', 'correct' => true],
                ['answer' => 'Olmec Empire', 'correct' => false],
            ]],
            ['question' => 'What is the term for a word that reads the same forwards and backwards?', 'difficulty' => 7, 'options' => [
                ['answer' => 'Anagram', 'correct' => false],
                ['answer' => 'Palindrome', 'correct' => true],
                ['answer' => 'Acronym', 'correct' => false],
                ['answer' => 'Homophone', 'correct' => false],
            ]],
            ['question' => 'Which country is home to the ancient city of Petra?', 'difficulty' => 7, 'options' => [
                ['answer' => 'Egypt', 'correct' => false],
                ['answer' => 'Jordan', 'correct' => true],
                ['answer' => 'Syria', 'correct' => false],
                ['answer' => 'Lebanon', 'correct' => false],
            ]],
            ['question' => 'Who painted "The Starry Night"?', 'difficulty' => 7, 'options' => [
                ['answer' => 'Claude Monet', 'correct' => false],
                ['answer' => 'Vincent van Gogh', 'correct' => true],
                ['answer' => 'Salvador Dalí', 'correct' => false],
                ['answer' => 'Edvard Munch', 'correct' => false],
            ]],
            ['question' => 'What is the unit of electrical resistance called?', 'difficulty' => 7, 'options' => [
                ['answer' => 'Volt', 'correct' => false],
                ['answer' => 'Watt', 'correct' => false],
                ['answer' => 'Ohm', 'correct' => true],
                ['answer' => 'Ampere', 'correct' => false],
            ]],
            ['question' => 'Which river flows through Baghdad?', 'difficulty' => 7, 'options' => [
                ['answer' => 'Euphrates', 'correct' => false],
                ['answer' => 'Jordan River', 'correct' => false],
                ['answer' => 'Tigris', 'correct' => true],
                ['answer' => 'Nile', 'correct' => false],
            ]],
            ['question' => 'What is the name of the first artificial satellite launched into space?', 'difficulty' => 7, 'options' => [
                ['answer' => 'Sputnik 1', 'correct' => true],
                ['answer' => 'Explorer 1', 'correct' => false],
                ['answer' => 'Vostok 1', 'correct' => false],
                ['answer' => 'Apollo 1', 'correct' => false],
            ]],

            // ---------- Level 8 (6 questions) ----------
            ['question' => 'Which philosopher wrote "The Republic"?', 'difficulty' => 8, 'options' => [
                ['answer' => 'Aristotle', 'correct' => false],
                ['answer' => 'Socrates', 'correct' => false],
                ['answer' => 'Plato', 'correct' => true],
                ['answer' => 'Epicurus', 'correct' => false],
            ]],
            ['question' => 'What is the term for a group of lions called?', 'difficulty' => 8, 'options' => [
                ['answer' => 'Pack', 'correct' => false],
                ['answer' => 'Pride', 'correct' => true],
                ['answer' => 'Herd', 'correct' => false],
                ['answer' => 'Colony', 'correct' => false],
            ]],
            ['question' => 'Which treaty ended World War I?', 'difficulty' => 8, 'options' => [
                ['answer' => 'Treaty of Paris', 'correct' => false],
                ['answer' => 'Treaty of Versailles', 'correct' => true],
                ['answer' => 'Treaty of Vienna', 'correct' => false],
                ['answer' => 'Treaty of Ghent', 'correct' => false],
            ]],
            ['question' => 'What is the smallest bone in the human body?', 'difficulty' => 8, 'options' => [
                ['answer' => 'Stapes', 'correct' => true],
                ['answer' => 'Femur', 'correct' => false],
                ['answer' => 'Radius', 'correct' => false],
                ['answer' => 'Patella', 'correct' => false],
            ]],
            ['question' => 'Which country was formerly known as Persia?', 'difficulty' => 8, 'options' => [
                ['answer' => 'Iraq', 'correct' => false],
                ['answer' => 'Turkey', 'correct' => false],
                ['answer' => 'Iran', 'correct' => true],
                ['answer' => 'Afghanistan', 'correct' => false],
            ]],
            ['question' => 'What does "DNA" stand for?', 'difficulty' => 8, 'options' => [
                ['answer' => 'Deoxyribonucleic Acid', 'correct' => true],
                ['answer' => 'Dioxyribonuclear Acid', 'correct' => false],
                ['answer' => 'Deoxyribose Nucleic Acid Chain', 'correct' => false],
                ['answer' => 'Dual Nucleic Acid', 'correct' => false],
            ]],
            ['question' => 'Which artist sculpted "David", now housed in Florence?', 'difficulty' => 8, 'options' => [
                ['answer' => 'Donatello', 'correct' => false],
                ['answer' => 'Michelangelo', 'correct' => true],
                ['answer' => 'Gian Lorenzo Bernini', 'correct' => false],
                ['answer' => 'Raphael', 'correct' => false],
            ]],

            // ---------- Level 9 (7 questions) ----------
            ['question' => 'Who composed the opera "The Magic Flute"?', 'difficulty' => 9, 'options' => [
                ['answer' => 'Ludwig van Beethoven', 'correct' => false],
                ['answer' => 'Wolfgang Amadeus Mozart', 'correct' => true],
                ['answer' => 'Giuseppe Verdi', 'correct' => false],
                ['answer' => 'Richard Wagner', 'correct' => false],
            ]],
            ['question' => 'Which country has the most time zones?', 'difficulty' => 9, 'options' => [
                ['answer' => 'Russia', 'correct' => false],
                ['answer' => 'United States', 'correct' => false],
                ['answer' => 'France', 'correct' => true],
                ['answer' => 'China', 'correct' => false],
            ]],
            ['question' => 'What is the name of the process by which plants make their own food?', 'difficulty' => 9, 'options' => [
                ['answer' => 'Respiration', 'correct' => false],
                ['answer' => 'Photosynthesis', 'correct' => true],
                ['answer' => 'Transpiration', 'correct' => false],
                ['answer' => 'Fermentation', 'correct' => false],
            ]],
            ['question' => 'Which battle is considered Napoleon\'s final defeat?', 'difficulty' => 9, 'options' => [
                ['answer' => 'Battle of Austerlitz', 'correct' => false],
                ['answer' => 'Battle of Trafalgar', 'correct' => false],
                ['answer' => 'Battle of Waterloo', 'correct' => true],
                ['answer' => 'Battle of Leipzig', 'correct' => false],
            ]],
            ['question' => 'What is the term for an animal that is active mainly at night?', 'difficulty' => 9, 'options' => [
                ['answer' => 'Diurnal', 'correct' => false],
                ['answer' => 'Nocturnal', 'correct' => true],
                ['answer' => 'Crepuscular', 'correct' => false],
                ['answer' => 'Migratory', 'correct' => false],
            ]],
            ['question' => 'Which African country was never colonized by a European power?', 'difficulty' => 9, 'options' => [
                ['answer' => 'Ethiopia', 'correct' => true],
                ['answer' => 'Kenya', 'correct' => false],
                ['answer' => 'Nigeria', 'correct' => false],
                ['answer' => 'Ghana', 'correct' => false],
            ]],
            ['question' => 'What is the term for the boundary where two tectonic plates slide past one another?', 'difficulty' => 9, 'options' => [
                ['answer' => 'Convergent boundary', 'correct' => false],
                ['answer' => 'Divergent boundary', 'correct' => false],
                ['answer' => 'Transform boundary', 'correct' => true],
                ['answer' => 'Subduction zone', 'correct' => false],
            ]],

            // ---------- Level 10 (7 questions) ----------
            ['question' => 'What is the name of the theory that the universe began from a single expanding point?', 'difficulty' => 10, 'options' => [
                ['answer' => 'Steady State Theory', 'correct' => false],
                ['answer' => 'Big Bang Theory', 'correct' => true],
                ['answer' => 'String Theory', 'correct' => false],
                ['answer' => 'Inflation Theory', 'correct' => false],
            ]],
            ['question' => 'Which mathematician is credited with developing calculus independently of Newton?', 'difficulty' => 10, 'options' => [
                ['answer' => 'Blaise Pascal', 'correct' => false],
                ['answer' => 'Gottfried Wilhelm Leibniz', 'correct' => true],
                ['answer' => 'René Descartes', 'correct' => false],
                ['answer' => 'Leonhard Euler', 'correct' => false],
            ]],
            ['question' => 'What was the name of the ship on which Charles Darwin sailed to the Galápagos Islands?', 'difficulty' => 10, 'options' => [
                ['answer' => 'HMS Beagle', 'correct' => true],
                ['answer' => 'HMS Endeavour', 'correct' => false],
                ['answer' => 'HMS Victory', 'correct' => false],
                ['answer' => 'HMS Discovery', 'correct' => false],
            ]],
            ['question' => 'Which dynasty built the Forbidden City in Beijing?', 'difficulty' => 10, 'options' => [
                ['answer' => 'Tang Dynasty', 'correct' => false],
                ['answer' => 'Song Dynasty', 'correct' => false],
                ['answer' => 'Ming Dynasty', 'correct' => true],
                ['answer' => 'Han Dynasty', 'correct' => false],
            ]],
            ['question' => 'What is the name of the deepest known point in the Earth\'s oceans?', 'difficulty' => 10, 'options' => [
                ['answer' => 'Puerto Rico Trench', 'correct' => false],
                ['answer' => 'Mariana Trench', 'correct' => true],
                ['answer' => 'Java Trench', 'correct' => false],
                ['answer' => 'Tonga Trench', 'correct' => false],
            ]],
            ['question' => 'Which artist is known for the "Campbell\'s Soup Cans" pop art series?', 'difficulty' => 10, 'options' => [
                ['answer' => 'Roy Lichtenstein', 'correct' => false],
                ['answer' => 'Andy Warhol', 'correct' => true],
                ['answer' => 'Jackson Pollock', 'correct' => false],
                ['answer' => 'Jasper Johns', 'correct' => false],
            ]],
            ['question' => 'Which 20th-century war is associated with the term "Iron Curtain", coined by Winston Churchill?', 'difficulty' => 10, 'options' => [
                ['answer' => 'World War II', 'correct' => false],
                ['answer' => 'The Cold War', 'correct' => true],
                ['answer' => 'The Korean War', 'correct' => false],
                ['answer' => 'The Vietnam War', 'correct' => false],
            ]],

            // ---------- Level 11 (6 questions) ----------
            ['question' => 'Which ancient library, one of the largest in antiquity, was located in Egypt?', 'difficulty' => 11, 'options' => [
                ['answer' => 'Library of Pergamum', 'correct' => false],
                ['answer' => 'Library of Alexandria', 'correct' => true],
                ['answer' => 'Library of Nineveh', 'correct' => false],
                ['answer' => 'Library of Baghdad', 'correct' => false],
            ]],
            ['question' => 'What is the name of the process by which stars produce energy?', 'difficulty' => 11, 'options' => [
                ['answer' => 'Nuclear fission', 'correct' => false],
                ['answer' => 'Nuclear fusion', 'correct' => true],
                ['answer' => 'Radioactive decay', 'correct' => false],
                ['answer' => 'Combustion', 'correct' => false],
            ]],
            ['question' => 'Which composer is known as the "Father of the Symphony"?', 'difficulty' => 11, 'options' => [
                ['answer' => 'Joseph Haydn', 'correct' => true],
                ['answer' => 'Antonio Vivaldi', 'correct' => false],
                ['answer' => 'Johannes Brahms', 'correct' => false],
                ['answer' => 'Franz Liszt', 'correct' => false],
            ]],
            ['question' => 'What was the ancient Egyptian process of preserving bodies called?', 'difficulty' => 11, 'options' => [
                ['answer' => 'Embalming ritual', 'correct' => false],
                ['answer' => 'Mummification', 'correct' => true],
                ['answer' => 'Interment', 'correct' => false],
                ['answer' => 'Petrification', 'correct' => false],
            ]],
            ['question' => 'Which strait separates Europe from Africa at its narrowest point?', 'difficulty' => 11, 'options' => [
                ['answer' => 'Strait of Hormuz', 'correct' => false],
                ['answer' => 'Bosphorus Strait', 'correct' => false],
                ['answer' => 'Strait of Gibraltar', 'correct' => true],
                ['answer' => 'Strait of Messina', 'correct' => false],
            ]],
            ['question' => 'Who wrote the philosophical work "Thus Spoke Zarathustra"?', 'difficulty' => 11, 'options' => [
                ['answer' => 'Immanuel Kant', 'correct' => false],
                ['answer' => 'Friedrich Nietzsche', 'correct' => true],
                ['answer' => 'Arthur Schopenhauer', 'correct' => false],
                ['answer' => 'Søren Kierkegaard', 'correct' => false],
            ]],

            // ---------- Level 12 (6 questions) ----------
            ['question' => 'Which scientist first formulated the laws of planetary motion?', 'difficulty' => 12, 'options' => [
                ['answer' => 'Nicolaus Copernicus', 'correct' => false],
                ['answer' => 'Johannes Kepler', 'correct' => true],
                ['answer' => 'Tycho Brahe', 'correct' => false],
                ['answer' => 'Galileo Galilei', 'correct' => false],
            ]],
            ['question' => 'What is the name of the genocide that occurred in Rwanda in 1994, targeting mainly which ethnic group?', 'difficulty' => 12, 'options' => [
                ['answer' => 'Hutu', 'correct' => false],
                ['answer' => 'Twa', 'correct' => false],
                ['answer' => 'Tutsi', 'correct' => true],
                ['answer' => 'Zulu', 'correct' => false],
            ]],
            ['question' => 'Which particle, predicted by the Standard Model, was confirmed by CERN in 2012?', 'difficulty' => 12, 'options' => [
                ['answer' => 'Neutrino', 'correct' => false],
                ['answer' => 'Higgs Boson', 'correct' => true],
                ['answer' => 'Quark', 'correct' => false],
                ['answer' => 'Positron', 'correct' => false],
            ]],
            ['question' => 'Which medieval trade network connected China to the Mediterranean?', 'difficulty' => 12, 'options' => [
                ['answer' => 'Amber Road', 'correct' => false],
                ['answer' => 'Silk Road', 'correct' => true],
                ['answer' => 'Incense Route', 'correct' => false],
                ['answer' => 'Salt Route', 'correct' => false],
            ]],
            ['question' => 'What is the name given to the layer of the sun visible during a total solar eclipse?', 'difficulty' => 12, 'options' => [
                ['answer' => 'Photosphere', 'correct' => false],
                ['answer' => 'Chromosphere', 'correct' => false],
                ['answer' => 'Corona', 'correct' => true],
                ['answer' => 'Core', 'correct' => false],
            ]],
            ['question' => 'Which explorer led the first expedition to circumnavigate the globe, though he died before completing it?', 'difficulty' => 12, 'options' => [
                ['answer' => 'Christopher Columbus', 'correct' => false],
                ['answer' => 'Vasco da Gama', 'correct' => false],
                ['answer' => 'Ferdinand Magellan', 'correct' => true],
                ['answer' => 'James Cook', 'correct' => false],
            ]],

            // ---------- Level 13 (6 questions) ----------
            ['question' => 'Which economist wrote "The Wealth of Nations", a foundational text of modern economics?', 'difficulty' => 13, 'options' => [
                ['answer' => 'John Maynard Keynes', 'correct' => false],
                ['answer' => 'Karl Marx', 'correct' => false],
                ['answer' => 'Adam Smith', 'correct' => true],
                ['answer' => 'David Ricardo', 'correct' => false],
            ]],
            ['question' => 'What is the name of the enzyme that unwinds the DNA double helix during replication?', 'difficulty' => 13, 'options' => [
                ['answer' => 'DNA polymerase', 'correct' => false],
                ['answer' => 'Helicase', 'correct' => true],
                ['answer' => 'Ligase', 'correct' => false],
                ['answer' => 'Primase', 'correct' => false],
            ]],
            ['question' => 'Which treaty, signed in 1648, ended the Thirty Years\' War?', 'difficulty' => 13, 'options' => [
                ['answer' => 'Peace of Westphalia', 'correct' => true],
                ['answer' => 'Treaty of Utrecht', 'correct' => false],
                ['answer' => 'Peace of Augsburg', 'correct' => false],
                ['answer' => 'Congress of Vienna', 'correct' => false],
            ]],
            ['question' => 'Which mountain range separates Europe from Asia?', 'difficulty' => 13, 'options' => [
                ['answer' => 'Carpathian Mountains', 'correct' => false],
                ['answer' => 'Caucasus Mountains', 'correct' => false],
                ['answer' => 'Ural Mountains', 'correct' => true],
                ['answer' => 'Alps', 'correct' => false],
            ]],
            ['question' => 'Who was the last Pharaoh of ancient Egypt?', 'difficulty' => 13, 'options' => [
                ['answer' => 'Nefertiti', 'correct' => false],
                ['answer' => 'Cleopatra VII', 'correct' => true],
                ['answer' => 'Hatshepsut', 'correct' => false],
                ['answer' => 'Ankhesenamun', 'correct' => false],
            ]],
            ['question' => 'What is the name of the cognitive bias where people overestimate their own abilities in areas they know little about?', 'difficulty' => 13, 'options' => [
                ['answer' => 'Confirmation bias', 'correct' => false],
                ['answer' => 'Dunning-Kruger effect', 'correct' => true],
                ['answer' => 'Anchoring bias', 'correct' => false],
                ['answer' => 'Halo effect', 'correct' => false],
            ]],

            // ---------- Level 14 (6 questions) ----------
            ['question' => 'Which Byzantine emperor commissioned the codification of Roman law known as the "Corpus Juris Civilis"?', 'difficulty' => 14, 'options' => [
                ['answer' => 'Constantine I', 'correct' => false],
                ['answer' => 'Justinian I', 'correct' => true],
                ['answer' => 'Theodosius I', 'correct' => false],
                ['answer' => 'Heraclius', 'correct' => false],
            ]],
            ['question' => 'What is the name of the theoretical boundary around a black hole beyond which nothing can escape?', 'difficulty' => 14, 'options' => [
                ['answer' => 'Photon sphere', 'correct' => false],
                ['answer' => 'Singularity', 'correct' => false],
                ['answer' => 'Event horizon', 'correct' => true],
                ['answer' => 'Accretion disk', 'correct' => false],
            ]],
            ['question' => 'Which linguist is widely regarded as the father of modern linguistics for his work on structuralism?', 'difficulty' => 14, 'options' => [
                ['answer' => 'Noam Chomsky', 'correct' => false],
                ['answer' => 'Ferdinand de Saussure', 'correct' => true],
                ['answer' => 'Roman Jakobson', 'correct' => false],
                ['answer' => 'Edward Sapir', 'correct' => false],
            ]],
            ['question' => 'Which battle in 1415, part of the Hundred Years\' War, is famous for the English use of longbowmen against a larger French force?', 'difficulty' => 14, 'options' => [
                ['answer' => 'Battle of Crécy', 'correct' => false],
                ['answer' => 'Battle of Poitiers', 'correct' => false],
                ['answer' => 'Battle of Agincourt', 'correct' => true],
                ['answer' => 'Battle of Orléans', 'correct' => false],
            ]],
            ['question' => 'What is the name of the smallest unit of currency historically used in the Byzantine Empire, later giving its name to a modern coin?', 'difficulty' => 14, 'options' => [
                ['answer' => 'Follis', 'correct' => false],
                ['answer' => 'Solidus', 'correct' => false],
                ['answer' => 'Denarius', 'correct' => false],
                ['answer' => 'Drachma', 'correct' => true],
            ]],
            ['question' => 'Which 19th-century mathematician is credited with founding modern set theory?', 'difficulty' => 14, 'options' => [
                ['answer' => 'Georg Cantor', 'correct' => true],
                ['answer' => 'David Hilbert', 'correct' => false],
                ['answer' => 'Bernhard Riemann', 'correct' => false],
                ['answer' => 'Carl Friedrich Gauss', 'correct' => false],
            ]],

            // ---------- Level 15 (6 questions) ----------
            ['question' => 'What is the name of the hypothetical particle that mediates the force of gravity, predicted but not yet observed?', 'difficulty' => 15, 'options' => [
                ['answer' => 'Gluon', 'correct' => false],
                ['answer' => 'Graviton', 'correct' => true],
                ['answer' => 'Gauge boson', 'correct' => false],
                ['answer' => 'Tachyon', 'correct' => false],
            ]],
            ['question' => 'Which 14th-century plague pandemic is estimated to have killed between 30% and 60% of Europe\'s population?', 'difficulty' => 15, 'options' => [
                ['answer' => 'The Antonine Plague', 'correct' => false],
                ['answer' => 'The Black Death', 'correct' => true],
                ['answer' => 'The Plague of Justinian', 'correct' => false],
                ['answer' => 'The Great Plague of London', 'correct' => false],
            ]],
            ['question' => 'Who formulated the incompleteness theorems that show fundamental limitations of formal mathematical systems?', 'difficulty' => 15, 'options' => [
                ['answer' => 'Alan Turing', 'correct' => false],
                ['answer' => 'Bertrand Russell', 'correct' => false],
                ['answer' => 'Kurt Gödel', 'correct' => true],
                ['answer' => 'Alfred North Whitehead', 'correct' => false],
            ]],
            ['question' => 'Which ancient wonder of the world, a lighthouse, stood in the harbor of Alexandria?', 'difficulty' => 15, 'options' => [
                ['answer' => 'Colossus of Rhodes', 'correct' => false],
                ['answer' => 'Lighthouse of Alexandria', 'correct' => true],
                ['answer' => 'Temple of Artemis', 'correct' => false],
                ['answer' => 'Statue of Zeus at Olympia', 'correct' => false],
            ]],
            ['question' => 'What is the term for the diplomatic principle, dominant in 19th-century Europe, of maintaining a stable distribution of power among states?', 'difficulty' => 15, 'options' => [
                ['answer' => 'Realpolitik', 'correct' => false],
                ['answer' => 'Balance of power', 'correct' => true],
                ['answer' => 'Manifest destiny', 'correct' => false],
                ['answer' => 'Containment', 'correct' => false],
            ]],
            ['question' => 'Which Mesopotamian king is credited with one of the earliest known written law codes?', 'difficulty' => 15, 'options' => [
                ['answer' => 'Sargon of Akkad', 'correct' => false],
                ['answer' => 'Nebuchadnezzar II', 'correct' => false],
                ['answer' => 'Hammurabi', 'correct' => true],
                ['answer' => 'Ashurbanipal', 'correct' => false],
            ]],
        ];

        foreach ($questions as $q) {
            $q['author'] = 'Seeder';
            Question::create($q);
        }
    }
}