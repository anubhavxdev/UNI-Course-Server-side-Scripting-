<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?PHP
    //Switch and Loop
    echo"Loop and Switch";
    echo"<br>";

    $marks = 85;

    switch (true) {
        case ($marks = "A+"):
            echo "Grade: A+";
            break;
        case ($marks >= 80):
            echo "Grade: A";
            break;
        case ($marks >= 70):
            echo "Grade: B";
            break;
        case ($marks >= 60):
            echo "Grade: C";
            break;
        case ($marks >= 50):
            echo "Grade: D";
            break;
        default:
            echo "Grade: F";
            break;
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $char = 'z';

    switch ($char) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
        case 'A':
        case 'E':
        case 'I':
        case 'O':
        case 'U':
            echo "$char is a vowel.";
            break;
        default:
            echo "$char is not a vowel.";
            break;
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $course = $_POST['course'];

    //     switch (strtolower($course)) {
    //         case 'cse':
    //             echo "Course Duration: 4 years";
    //             break;
    //         case 'bba':
    //             echo "Course Duration: 3 years";
    //             break;
    //         case 'me':
    //             echo "Course Duration: 4 years";
    //             break;
    //         case 'bsc':
    //             echo "Course Duration: 3 years";
    //             break;
    //         default:
    //             echo "Course not found.";
    //             break;
    //     }
    // }


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $book = $_POST['book'];
//     $author = $_POST['author'];

//     switch (strtolower($book)) {
//         case 'rd sharma maths':
//             switch (strtolower($author)) {
//                 case 'hc verma':
//                     echo "Book: RD SHARMA MATHS, Author: HC VERMA";
//                     break;
//                 default:
//                     echo "Author not found for RD SHARMA MATHS.";
//                     echo "Price of the book is Rs.1";
//                     break;
//             }
//             break;
//         case 'lord of the rings':
//             switch (strtolower($author)) {
//                 case 'j.r.r. tolkien':
//                     echo "Book: Lord of the Rings, Author: J.R.R. Tolkien";
//                     break;
//                 default:
//                     echo "Author not found for Lord of the Rings.";
//                     break;
//             }
//             break;
//         default:
//             echo "Book not found.";
//             break;
//     }
// }




//Loops
// 1.while Loop
    echo "<br>";

    // $i = 1;
    // while ($i <= 10) {
    //     $i++;
    //     echo $i . "<br>";
    //     $i++;
    // }


    //2. do while loop

    // echo "<br>";
    // $i = 1;
    // do {
    //     echo $i . "<br>";
    //     $i++;
    // } while ($i <= 10);

    //3. for loop

    // echo "<br>";
    // for ($i = 1; $i <= 20; $i++) {
    //     echo $i . "<br>";
    // }

    //4. for each loop

    // echo "<br>";
    // $colors = array("red", "green", "blue", "yellow");

    // foreach ($colors as $color) {
    //     echo $color . "<br>";
    // }

    // echo "<br>";
    // $students = array(
    //     "John" => 85,
    //     "Jane" => 78,
    //     "Doe" => 92,
    //     "Smith" => 67
    // );

    // foreach ($students as $name => $score) {
    //     echo "Student: $name, Score: $score<br>";
    // }



    

?>
<!-- <form method="post" action="">
    <label for="book">Enter Book Name:</label>
    <input type="text" id="book" name="book">
    <br>
    <label for="author">Enter Author Name:</label>
    <input type="text" id="author" name="author">
    <br>
    <input type="submit" value="Submit">
</form> -->
</body>
</html>