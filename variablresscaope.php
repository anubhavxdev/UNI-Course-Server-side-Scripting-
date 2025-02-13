<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variable Scope</title>
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
        <h1 style="text-align: center; color: white;">PHP Variable Scope</h1>
    </header>

    <main style="padding: 20px; text-align: center;">
    <?PHP

echo "<h2>Global And Local Variables</h2>";

    // Global scope
    $x = 5;

    function myTest() {
        // Local scope
        $y = 10;
        echo "<p>Variable x inside function is: $x</p>"; // This will generate an error
        echo "<p>Variable y inside function is: $y</p>";
    }

    myTest();

    echo "<p>Variable x outside function is: $x</p>";
    echo "<p>Variable y outside function is: $y</p>"; // This will generate an error
    

    echo"<br>";
    echo"<hr>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";

    echo "<h2>Static Variables</h2>";
    echo "<br>";

    static $count1 = 10;

    $count2 = 10;

    function num($count, $count2) {
            static $count1 = 0;
            $count1++;
            echo "<p>Local Static Variable is: $count1</p>";
            echo "<br>";
    
            $count2++;
            echo "<p>Local Variable is: $count2</p>";
        }

        echo num($count1, $count2) ."<br>";
    ?>
    </main>
    <footer style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%); height:auto; width: auto; padding: 1px;">
        <h3 style="text-align: center; color: white;">&copy; Anubhav Jaiswal 2025</h3>
</body>
</html>