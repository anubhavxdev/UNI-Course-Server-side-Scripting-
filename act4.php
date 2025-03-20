<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grades</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }
        .container {
            width: 60%;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        form {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Grades</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Math</th>
                <th>Science</th>
                <th>History</th>
                <th>Total</th>
                <th>Average</th>
                <th>Grade</th>
            </tr>
            <?php
            session_start();
            if (!isset($_SESSION['students'])) {
                $_SESSION['students'] = [
                    [
                        'id' => 1,
                        'name' => 'Anubhav Jaiswal',
                        'subjects' => [
                            'Math' => 85,
                            'Science' => 90,
                            'History' => 95
                        ]
                    ],
                    [
                        'id' => 2,
                        'name' => 'Priyanshu Kumar',
                        'subjects' => [
                            'Math' => 92,
                            'Science' => 88,
                            'History' => 80
                        ]
                    ]
                ];
            }

            function calculateGrades($subjects) {
                $total = array_sum($subjects);
                $average = $total / count($subjects);
                return ['total' => $total, 'average' => $average];
            }

            function getGradeCategory($average) {
                if ($average >= 90) return 'A';
                elseif ($average >= 80) return 'B';
                elseif ($average >= 70) return 'C';
                elseif ($average >= 60) return 'D';
                else return 'F';
            }

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $id = $_POST['id'];
                $subject = $_POST['subject'];
                $newGrade = $_POST['grade'];
                foreach ($_SESSION['students'] as &$student) {
                    if ($student['id'] == $id && isset($student['subjects'][$subject])) {
                        $student['subjects'][$subject] = $newGrade;
                        break;
                    }
                }
            }

            foreach ($_SESSION['students'] as $student) {
                $grades = calculateGrades($student['subjects']);
                echo "<tr>";
                echo "<td>{$student['id']}</td>";
                echo "<td>{$student['name']}</td>";
                echo "<td>{$student['subjects']['Math']}</td>";
                echo "<td>{$student['subjects']['Science']}</td>";
                echo "<td>{$student['subjects']['History']}</td>";
                echo "<td>{$grades['total']}</td>";
                echo "<td>" . number_format($grades['average'], 2) . "</td>";
                echo "<td>" . getGradeCategory($grades['average']) . "</td>";
                echo "</tr>";
            }
            ?>
        </table>

        <form method="post">
            <h3>Modify Student Grade</h3>
            <label for="id">Student ID:</label>
            <input type="number" name="id" required>
            <label for="subject">Subject:</label>
            <select name="subject" required>
                <option value="Math">Math</option>
                <option value="Science">Science</option>
                <option value="History">History</option>
            </select>
            <label for="grade">New Grade:</label>
            <input type="number" name="grade" min="0" max="100" required>
            <button type="submit">Update Grade</button>
        </form>
    </div>
</body>
</html>
