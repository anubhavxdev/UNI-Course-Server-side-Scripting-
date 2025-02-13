<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions PHP</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }

        hr{
            border: 1px solid black;
        }
        body{
            background-image: linear-gradient(to right, #ff8177 0%, #ff867a 0%, #ff8c7f 21%, #f99185 52%, #cf556c 78%, #b12a5b 100%);
        }

    </style>
</head>
<body>
    <header style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%); height:auto; width: auto; padding: 1px; position: sticky; top: 0; z-index: 1000;">
        <h1 style="text-align: center; color: white;">PHP Functions</h1>
    </header>

    <main style="padding: 20px; text-align: center;">
    <?PHP

    // Define the functions

    echo "<h2>Normal Function Calling</h2>";
    echo "<br>";
    function printName($name){
        echo "<h3>My name is $name</h3>";
    }
    function printDescription($description){
        echo "<h3>$description</h3>";
    }

    // Call the functions
    printName("Anubhav Jaiswal");
    printDescription("A passionate MERN Developer.");

    echo"<br>";
    echo"<hr>";
    echo"<br>";
    echo "<hr>";
    //For multiple values

    echo "<br>";
    echo "<h2>Function Calling multiple arguements</h2>";
    echo "<br>";
    function printMultiple($name, $description, $reg){
        echo "<h3>My name is $name</h3>";
        echo "<h3>$description</h3>";
        echo "<h3>My registration number is $reg</h3>";
    }

    printMultiple("Anubhav Jaiswal","Operation Lead","12302387",);



    echo"<br>";
    echo"<hr>";
    echo"<br>";
    echo "<hr>";
    echo "<br>";

    echo "<h2>Function with Default Parameters</h2>";
    echo "<br>";

    function defaultpara($name, $description, $reg = "132456"){
        echo "<h3>My name is $name</h3>";
        echo "<h3>$description</h3>";
        echo "<h3>My registration number is $reg</h3>";
    }

    defaultpara("Chomu","So called Coder",);
    

    echo"<br>";
    echo"<hr>";
    echo"<br>";
    echo "<hr>";
    echo "<br>";

    echo "<h2>Function with Return type parameters</h2>";
    echo "<br>";

    function add(int $a, int $b){
        return $a + $b;
    }
    echo "addition of a number is". add("5","10",);
    echo"<br>";

    function mul(int $a, int $b){
        return $a * $b;
    }
    echo"multiplication of a number is". mul("5","10",);
    echo"<br>";

    function sub(int $a, int $b){
        return $a - $b;
    }
    echo"subtraction of a number is". sub("5","10",);
    echo"<br>";

    function div(int $a, int $b){
        return $a / $b;
    }
    echo "division of a number is". div("5","10",);
    echo"<br>";

    
    echo"<br>";
    echo"<hr>";
    echo"<br>";
    echo "<hr>";
    echo "<br>";
    echo "<h2>Function with different datatype type</h2>";
    function addf(float $a, float $b){
        return $a + $b;
    }
    echo "addition of a number is". addf("5","10",);
    echo"<br>";

    function mulf(float $a, float $b){
        return $a * $b;
    }
    echo"multiplication of a number is". mulf("5","10",);
    echo"<br>";

    function subf(float $a, float $b){
        return $a - $b;
    }
    echo"subtraction of a number is". subf("5","10",);
    echo"<br>";

    function divf(float $a, float $b){
        return $a / $b;
    }
    echo "division of a number is". divf("5","10",);
    echo"<br>";

    
    echo"<br>";
    echo"<hr>";
    echo"<br>";
    echo "<hr>";
    echo "<br>";
    echo "<h2>Function with call by value and call by arguements</h2>";
    echo"<br>";

    function addFive($num) {
        $num += 5;
        echo "Value inside function (by value): $num<br>";
    }

    function addFiveByReference(&$num) {
        $num += 5;
        echo "Value inside function (by reference): $num<br>";
    }

    $number = 10;
    echo "Original value: $number<br>";
    addFive($number);
    echo "After call by value: $number<br>";

    echo "<br>";

    $number = 10;
    echo "Original value: $number<br>";
    addFiveByReference($number);
    echo "After call by reference: $number<br>";

    //with array
    echo "<br>";
    echo "<hr>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";
    echo "<br>";

    echo "<h2>Function with Arrays</h2>";
    echo "<br>";

    function printArray($arr) {
        foreach ($arr as $value) {
            echo "<h3>$value</h3>";
        }
    }

    $names = ["Anubhav Jaiswal", "Ankush", "Priyanshu"];
    printArray($names);

 

    function sumArray($arr) {
        $sum = 0;
        foreach ($arr as $value) {
            $sum += $value;
        }
        return $sum;
    }

    $numbers = [1, 2, 3, 4, 5];
    echo "Sum of array elements is " . sumArray($numbers);

    ?>
    </main>
    <footer style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%); height:auto; width: auto; padding: 1px;">
        <h3 style="text-align: center; color: white;">&copy; Anubhav Jaiswal 2025</h3>
</body>
</html>