<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?PHP
    //Loop
    $super = array(
        "man" => "Priyanshu",
        "woman" => "Ritika",
        "child" => "Sonu",
    );

    foreach ($super as $key => $value) {
        echo "Key: $key; Value: $value<br>";
    }


    $number=array("one","two","three","four","five");
    foreach ($number as $key => $value) {
        echo "Key: $key; Value: $value<br>";
    }
    // question 1. implement data funaction with all control structure and loops separately
    // Function to demonstrate control structures and loops
    function processData() {
        // If-else statement
        $age = 20;
        if ($age < 18) {
            echo "You are a minor.<br>";
        } else {
            echo "You are an adult.<br>";
        }

        // Switch statement
        $day = "Monday";
        switch ($day) {
            case "Monday":
                echo "Today is Monday.<br>";
                break;
            case "Tuesday":
                echo "Today is Tuesday.<br>";
                break;
            default:
                echo "Today is not Monday or Tuesday.<br>";
        }

        // While loop
        $i = 0;
        while ($i < 3) {
            echo "While loop iteration: $i<br>";
            $i++;
        }

        // Do-while loop
        $j = 0;
        do {
            echo "Do-while loop iteration: $j<br>";
            $j++;
        } while ($j < 3);

        // For loop
        for ($k = 0; $k < 3; $k++) {
            echo "For loop iteration: $k<br>";
        }

        // Foreach loop
        $colors = array("red", "green", "blue");
        foreach ($colors as $color) {
            echo "Color: $color<br>";
        }
    }

    // Call the function

    //Question 2. Write a php script that student marks as input and assign grade based on the criteria

    
    function assignGrade($marks) {
        if ($marks >= 90) {
            return "A";
        } elseif ($marks >= 80) {
            return "B";
        } elseif ($marks >= 70) {
            return "C";
        } elseif ($marks >= 60) {
            return "D";
        } else {
            return "F";
        }
    }

 
    $studentMarks = 85; 
    $grade = assignGrade($studentMarks);
    echo "Student marks: $studentMarks; Grade: $grade<br>";
    processData();


    //Question 3 an online store offers discount based on the total purchase amount purchase above 500 20% discount, purchase between 200 and 500 10% disount purchase belwo 200 no discount
    // Function to calculate discount based on purchase amount
    function calculateDiscount($amount) {
        if ($amount > 500) {
            return $amount * 0.20;
        } elseif ($amount >= 200 && $amount <= 500) {
            return $amount * 0.10;
        } else {
            return 0;
        }
    }

    
    $purchaseAmount = 450; 
    $discount = calculateDiscount($purchaseAmount);
    $finalAmount = $purchaseAmount - $discount;
    echo "Purchase amount: $purchaseAmount; Discount: $discount; Final amount: $finalAmount<br>";


    //Question 4. Write a php script that takes a number as input and print its table 1 to 10 using a for loop
    function printTable($number) {
        for ($i = 1; $i <= 10; $i++) {
            $result = $number * $i;
            echo "$number x $i = $result<br>";
        }
    }

   
    $number = 12; 
    printTable($number);

    //Question 5. write a php scripts that prints all numbers from 1 to 20 and classifes them as "Even" or "Odd" using a while loop
    $i = 1;
    while ($i <= 20) {
        if ($i % 2 == 0) {
            echo "$i is Even<br>";
        } else {
            echo "$i is Odd<br>";
        }
        $i++;
    }


    //Question 6. Create a password attempt system a user gets a three chances to enter the correct
    $correctPassword = "secret";
    $attempts = 0;
    $maxAttempts = 3;

    while ($attempts < $maxAttempts) {
        $userPassword = "secret"; 
        if ($userPassword === $correctPassword) {
            echo "Access granted.<br>";
            break;
        } else {
            $attempts++;
            echo "Incorrect password. Attempt $attempts of $maxAttempts.<br>";
        }

        if ($attempts == $maxAttempts) {
            echo "Access denied. You have used all your attempts.<br>";
        }
    }

    //Question 7. Give implementation of relational operators , arithmetic operators and logical operators and string operators
    // Relational operators
    
    $a = 10;
    $b = 20;
    echo "Relational Operators:<br>";
    echo "$a == $b: " . ($a == $b ? 'true' : 'false') . "<br>";
    echo "$a != $b: " . ($a != $b ? 'true' : 'false') . "<br>";
    echo "$a > $b: " . ($a > $b ? 'true' : 'false') . "<br>";
    echo "$a < $b: " . ($a < $b ? 'true' : 'false') . "<br>";
    echo "$a >= $b: " . ($a >= $b ? 'true' : 'false') . "<br>";
    echo "$a <= $b: " . ($a <= $b ? 'true' : 'false') . "<br>";

    // Arithmetic operators
    echo "Arithmetic Operators:<br>";
    echo "$a + $b = " . ($a + $b) . "<br>";
    echo "$a - $b = " . ($a - $b) . "<br>";
    echo "$a * $b = " . ($a * $b) . "<br>";
    echo "$a / $b = " . ($a / $b) . "<br>";
    echo "$a % $b = " . ($a % $b) . "<br>";

    // Logical operators
    $x = true;
    $y = false;
    echo "Logical Operators:<br>";
    echo "$x && $y: " . ($x && $y ? 'true' : 'false') . "<br>";
    echo "$x || $y: " . ($x || $y ? 'true' : 'false') . "<br>";
    echo "!$x: " . (!$x ? 'true' : 'false') . "<br>";

    // String operators
    $str1 = "Hello";
    $str2 = "World";
    echo "String Operators:<br>";
    echo "$str1 . $str2 = " . ($str1 . $str2) . "<br>";
    $str1 .= $str2;
    echo "$str1 .= $str2: $str1<br>";

    ?>
</body>
</html>