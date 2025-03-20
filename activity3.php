<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 3</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(0, 0, 0);
            text-align: center;
            margin: 0;
            padding: 20px;
        }
        .quiz-container {
            background: #fff;
            padding: 20px;
            max-width: 500px;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="submit"] {
            background: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background: #218838;
        }
    </style>
</head>
<body>
    <div class="quiz-container">
        <h2>Quiz</h2>
        <?php
            $questions = [
                [
                    'question' => 'What is the Chancellor of LPU?',
                    'options' => ['A) Paris', 'B) London', 'C) Berlin', 'D) Madrid'],
                    'answer' => 'A'
                ],
                [
                    'question' => 'What is 2 + 2?',
                    'options' => ['A) 3', 'B) 4', 'C) 5', 'D) 6'],
                    'answer' => 'B'
                ],
                [
                    'question' => 'What is the largest planet in our solar system?',
                    'options' => ['A) Earth', 'B) Mars', 'C) Jupiter', 'D) Saturn'],
                    'answer' => 'C'
                ],
                [
                    'question' => 'What is the chemical symbol for water?',
                    'options' => ['A) H2O', 'B) O2', 'C) CO2', 'D) H2'],
                    'answer' => 'A'
                ],
                [
                    'question' => 'Who wrote "Romeo and Juliet"?',
                    'options' => ['A) Charles Dickens', 'B) William Shakespeare', 'C) Mark Twain', 'D) Jane Austen'],
                    'answer' => 'B'
                ],
                [
                    'question' => 'What is the speed of light?',
                    'options' => ['A) 300,000 km/s', 'B) 150,000 km/s', 'C) 450,000 km/s', 'D) 600,000 km/s'],
                    'answer' => 'A'
                ],
                [
                    'question' => 'What is the capital of Japan?',
                    'options' => ['A) Beijing', 'B) Seoul', 'C) Tokyo', 'D) Bangkok'],
                    'answer' => 'C'
                ],
                [
                    'question' => 'What is the smallest prime number?',
                    'options' => ['A) 0', 'B) 1', 'C) 2', 'D) 3'],
                    'answer' => 'C'
                ],
                [
                    'question' => 'Who painted the Mona Lisa?',
                    'options' => ['A) Vincent van Gogh', 'B) Pablo Picasso', 'C) Leonardo da Vinci', 'D) Claude Monet'],
                    'answer' => 'C'
                ],
                [
                    'question' => 'What is the powerhouse of the cell?',
                    'options' => ['A) Nucleus', 'B) Mitochondria', 'C) Ribosome', 'D) Endoplasmic Reticulum'],
                    'answer' => 'B'
                ]
            ];

            function displayQuiz($questions) {
                echo '<form method="post" action="">';
                foreach ($questions as $index => $question) {
                    echo '<p>' . ($index + 1) . '. ' . $question['question'] . '</p>';
                    foreach ($question['options'] as $option) {
                        echo '<input type="radio" name="question' . $index . '" value="' . $option[0] . '"> ' . $option . '<br>';
                    }
                }
                echo '<input type="submit" name="submit" value="Submit">';
                echo '</form>';
            }

            function calculateScore($questions) {
                $score = 0;
                foreach ($questions as $index => $question) {
                    if (isset($_POST['question' . $index]) && $_POST['question' . $index] == $question['answer']) {
                        $score++;
                    }
                }
                return $score;
            }

            if (isset($_POST['submit'])) {
                $score = calculateScore($questions);
                echo '<p>Your score is: ' . $score . ' out of ' . count($questions) . '</p>';
            } else {
                displayQuiz($questions);
            }
        ?>
    </div>
</body>
</html>
