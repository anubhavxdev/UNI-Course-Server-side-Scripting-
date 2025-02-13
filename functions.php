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
    function printName($name){
        echo "<h1>My name is $name</h1>";
    }
    function printDescription($description){
        echo "<h2>$description</h2>";
    }

    // Call the functions
    printName("Anubhav Jaiswal");
    printDescription("A passionate MERN Developer.");

    ?>
    </main>
    <footer style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%); height:auto; width: auto; padding: 1px;">
        <h3 style="text-align: center; color: white;">&copy; Anubhav Jaiswal 2025</h3>
</body>
</html>