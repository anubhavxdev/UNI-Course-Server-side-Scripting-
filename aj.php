<!-- // Date: 16-01-2025 -->
<!-- /**
 * This script demonstrates various PHP functionalities including:
 * - Variable declaration and usage
 * - String interpolation and concatenation
 * - Arithmetic operations
 * - Type checking and type casting
 * - Array declaration and usage
 * - Constants declaration using `define` and `const`
 * - Predefined constants like `__LINE__`, `__FILE__`, and `__DIR__`
 * - Function declaration and usage
 * - Variable type conversion
 * - Checking variable types using `var_dump` and type checking functions
 * - Demonstrating boolean conversion of different values
 * - Performing arithmetic operations with type casting
 *
 * The script outputs various data types and their values, demonstrates type casting,
 * and shows how to use constants and predefined constants in PHP.
 */ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning</title>
</head>
<body>
    <?php
//  $x= 15;
//  $name = "Anubhav";
//  echo $x;
//  echo "<br>";
//  echo $name; 
//  echo "<br>";



//  $data = "PHP";
//  echo "I am learning $data !";
//  echo "<br>";
//  echo "I am learning" .$data. "!";
//  echo "<br>";

//  $value_1 = 14;
//  $value_2 = 5;
//  echo $value_1 + $value_2;
//  echo "<br>";


//  $number = 11;
//  var_dump($number);
//  echo "<br>";



//  $number2 = 20.15;
//  var_dump($number2);
//  echo "<br>";


//     $x = "Hello world!";
//     $y = 'Hello world!';

//     var_dump($x);
//     echo "<br>";
//     var_dump($y);
//     echo "<br>";


//     $year = '2025';
//     $wish = 'welcome to LPU';

//     var_dump($wish);
//     echo "<br>";
//     var_dump($year);
//     echo "<br>";


//     $friend = array("Ankush","Priyanshu","Sawan","Gaurav","Shashank","Vedant","Rishi",);
//     var_dump($friend);
//     echo "<br>";



//     $questions = "How was your day?";
//     $questions = null;
//     var_dump($questions);
//     echo "<br>";

//     echo strlen("Hello world!");
//     echo "<br>";



//     define("wishes","Good Morning!");
//     echo wishes;
//     echo "<br>";



//     const greetings = "Good Evening!";
//     echo greetings;
//     echo "<br>";

//     echo constant("wishes");
//     echo "<br>";
//     echo constant("greetings");
//     echo "<br>";



//     define("couses",[
//         "CSE",
//         "ECE",
//         "ME",
//         "CE",
//         "PE",
//         "EE",
//         "MBA",
//         "BBA",
//         "BCA",
//         "MCA"]);

//     echo couses[0];
//     echo "<br>";



//     const c = array(
//         "HTML",
//         "CSS",
//         "JS",
//         "PHP",
//         "JAVA",
//     );
//     echo c[1];
//     echo "<br>";



//     echo "The current line number is".__LINE__.".";
//     echo"<br>";
//     echo "Current PHP script name is".__FILE__.".";
//     echo "<br>";

//     echo "Directory of the Current PHP script is".__DIR__.".";
//     echo "<br>";


//     function hello(){
//         $a="Hello World!";
//         echo "$a. The function name is ".__FUNCTION__.".";
//     }
//     hello();



//     $a = 5;
//     $b = 5.35;
//     $c = "Hello";
//     $d = true;
//     $e = NULL;

    
//     $a = (string) $a;
//     $b = (string) $b;
//     $c = (string) $c;
//     $d = (string) $d;
//     $e = (string) $e;


//     var_dump($a);
//     echo "<br>";
//     var_dump($b);
//     echo "<br>";
//     var_dump($c);
//     echo "<br>";
//     var_dump($d);
//     echo "<br>";
//     var_dump($e);
//     echo "<br>";



//     var_dump(40);
//     echo "<br>";
//     var_dump("aman");
//     echo "<br>";
//     var_dump("2.22");
//     echo "<br>";
//     var_dump(false);
//     echo "<br>";
//     var_dump([21,13,16]);
//     echo "<br>";
//     var_dump(NULL);
//     echo "<br>";

//     $x = $y = $z = "Anubhav";
//     echo $x;
//     echo $y;
//     echo $z;

//     $x = 5985;
//     echo"<br>";
//     var_dump(is_int($x));
//     echo"<br>";
//     var_dump(is_integer($x));

//     $y = 59.85;
//     var_dump(is_float($y));
//     echo "<br>";

// //TYPE CASTING

//     $saiyam = "25 kilometere";
//     $saiyam = (int) $saiyam;
//     echo $saiyam;
//     var_dump(is_int($saiyam));
//     echo"<br>";


//     $rishi = "kilometere 25";
//     $rishi = (int) $rishi;
//     echo $rishi;
//     echo"<br>";

//     $am = "25 kilometere";
//     $am = (FLOAT) $am;
//     echo $am;
//     var_dump(is_int($am));
//     echo"<br>";
    


//     $i = 5;
//     $i = (bool) $i;
//     echo $i;    
//     echo "<br>";

//     $ii = 5.34;
//     $ii = (bool) $ii;
//     echo $ii;
//     echo "<br>";

//     $iii = 0;
//     $ii = (bool) $iii;
//     echo $ii;
//     echo "<br>";

//     $iv = -1;
//     echo $iv;
//     echo "<br>";

//     $v = 0.1;
//     $v = (bool) $v;
//     echo $v;
//     echo "<br>";

//     $vii = "hello";
//     $vii = (bool) $vii;
//     echo $vii;
//     echo "<br>";

//     $viii = "";
//     $viii = (bool) $viii;
//     echo $viii;
//     echo "<br>";

//     $ix = true;
//     $ix = (bool) $ix;
//     echo $ix;
//     echo "<br>";

//     $x = NULL;
//     $x = (bool) $x;
//     echo $x;
//     echo "<br>";
//     echo "<br>";


//     $string = "10";
//     $int = 5;
//     $result = (int)$string + $int;
//     echo $result;


//     echo "<br>";

    //Operators

    // $x = 10;
    // $y = 10;
    // $add = $x + $y;
    // echo $add;
    // echo "<br>";
    // $sub = $x - $y;
    // echo $sub;
    // echo "<br>";
    // $mul = $x * $y;
    // echo $mul;
    // echo "<br>";
    // $div = $x / $y;
    // echo $div;
    // echo "<br>";
    // $mod = $x % $y;
    // echo $mod;
    // echo "<br>";

    // //Assignment Operators

    // $x = 10;
    // $x += 5;
    // echo $x;
    // echo "<br>";

    // $x = 10;
    // $x -= 5;
    // echo $x;
    // echo "<br>";

    // $x = 10;
    // $x *= 5;
    // echo $x;
    // echo "<br>";

    // $x = 10;
    // $x /= 5;
    // echo $x;
    // echo "<br>";

    // $x = 10;
    // $x %= 5;
    // echo $x;
    // echo "<br>";


    // //Comparison Operators
    // $a = 10;
    // $b = 20;

    // var_dump($a == $b); // Equal
    // echo "<br>";

    // var_dump($a === $b); // Identical
    // echo "<br>";

    // var_dump($a != $b); // Not equal
    // echo "<br>";

    // var_dump($a <> $b); // Not equal
    // echo "<br>";

    // var_dump($a !== $b); // Not identical
    // echo "<br>";

    // var_dump($a < $b); // Less than
    // echo "<br>";

    // var_dump($a > $b); // Greater than
    // echo "<br>";

    // var_dump($a <= $b); // Less than or equal to
    // echo "<br>";

    // var_dump($a >= $b); // Greater than or equal to
    // echo "<br>";

    // var_dump($a <=> $b); // Spaceship operator
    // echo "<br>";


    // //increment & decrement operators

    // $x = 10;
    // echo ++$x; // Pre-increment
    // echo "<br>";

    // $x = 10;
    // echo $x++; // Post-increment
    // echo "<br>";
    // echo $x; // Value after post-increment
    // echo "<br>";

    // $x = 10;
    // echo --$x; // Pre-decrement
    // echo "<br>";

    // $x = 10;
    // echo $x--; // Post-decrement
    // echo "<br>";
    // echo $x; // Value after post-decrement
    // echo "<br>";

    // //String Operators

    // // String Operators

    // $str1 = "Hello";
    // $str2 = " World!";
    // $concatenation = $str1 . $str2; // Concatenation
    // echo $concatenation;
    // echo "<br>";

    // $str1 .= $str2; // Concatenation assignment
    // echo $str1;
    // echo "<br>";

    // //Conditional Operators
    // // Conditional (Ternary) Operator
    // $age = 20;
    // $status = ($age >= 18) ? "Adult" : "Minor";
    // echo $status;
    // echo "<br>";

    // // Null Coalescing Operator
    // $name = "Priyanshu";
    // $defaultName = "Guest";
    // $userName = $name ?? $defaultName;
    // echo $userName;
    // echo "<br>";


    // //Logical Operators
    // // Logical Operators

    // $a = true;
    // $b = false;

    // var_dump($a && $b); // And
    // echo "<br>";

    // var_dump($a || $b); // Or
    // echo "<br>";

    // var_dump(!$a); // Not
    // echo "<br>";

    // var_dump($a xor $b); // Xor
    // echo "<br>";

    // $c = true;
    // $d = true;

    // var_dump($c and $d); // And
    // echo "<br>";

    // var_dump($c or $d); // Or
    // echo "<br>";

    // var_dump($c && $d); // And
    // echo "<br>";

    // var_dump($c || $d); // Or
    // echo "<br>";

    // var_dump(!$c); // Not
    // echo "<br>";

    // var_dump($c xor $d); // Xor
    // echo "<br>";


   
    // // control Structures

    // $year = 2021; 

    // if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    //     echo "$year is a leap year.";
    // } else {
    //     echo "$year is not a leap year.";
    // }

    // echo "<br>";

    // $score = 85;
    // $attendance = 90;

    // if ($score >= 90 && $attendance >= 90) {
    //     echo "Grade: A and Attendance: $attendance%";
    // } elseif ($score >= 80 && $attendance >= 80) {
    //     echo "Grade: B and Attendance: $attendance%";
    // } elseif ($score >= 70 && $attendance >= 70) {
    //     echo "Grade: C and Attendance: $attendance%";
    // } elseif ($score >= 60 && $attendance >= 60) {
    //     echo "Grade: D and Attendance: $attendance%";
    // } else {
    //     echo "Grade: F";
    // }


    // 30/31/25
    //Date and time functions

    // date_default_timezone_set("Asia/Kolkata");

    // $d = date("D");
    // if($d == "Thu") {
    //     echo"Its a Thursday";
    // } else {
    //     echo "Its not a Thursday";
    // }

    // $t = date("H");
    // echo $t;
    // echo"<br>";
    // if($t < "20") {
    //     echo "Have a good day!";
    // } else {
    //     echo "Have a good night!";
    // }
    // echo"<br>";

    // echo "The current time is " . date("h:i:sa");
    // echo"<br>";
    // $a = date("D");
    // echo $a;


    //if-else-elseif

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $name = $_POST['name'];
    //     $age = $_POST['age'];

    //     if (empty($name) || empty($age)) {
    //         echo "Please fill in all fields.";
    //     } else {
    //         echo "Hello, $name. You are $age years old.";
    //     }
    // }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $marks = $_POST['age'];

        if (empty($name) || empty($marks)) {
            echo "Please fill in all fields.";
        } else {
            echo "Hello, $name. ";
            if ($marks >= 90) {
                echo "Congratulations You have scored an A grade.";
            } elseif ($marks >= 80) {
                echo "Very Good You have scored a B grade.";
            } elseif ($marks >= 70) {
                echo "Good You have scored a C grade.";
            } elseif ($marks >= 60) {
                echo "Study hard You have scored a D grade.";
            } else {
                echo "Go and take admission in LPU You have scored an F grade.";
            }
        }
    }

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="name"><br>
    Marks <input type="text" name="age"><br>
    <input type="submit">
</form>

</body>
</html>