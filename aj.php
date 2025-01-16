// Date: 16-01-2025

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning</title>
</head>
<body>
    <?php
 $x= 15;
 $name = "Anubhav";
 echo $x;
 echo "<br>";
 echo $name; 
 echo "<br>";



 $data = "PHP";
 echo "I am learning $data !";
 echo "<br>";
 echo "I am learning" .$data. "!";
 echo "<br>";

 $value_1 = 14;
 $value_2 = 5;
 echo $value_1 + $value_2;
 echo "<br>";


 $number = 11;
 var_dump($number);
 echo "<br>";



 $number2 = 20.15;
 var_dump($number2);
 echo "<br>";


    $x = "Hello world!";
    $y = 'Hello world!';

    var_dump($x);
    echo "<br>";
    var_dump($y);
    echo "<br>";


    $year = '2025';
    $wish = 'welcome to LPU';

    var_dump($wish);
    echo "<br>";
    var_dump($year);
    echo "<br>";


    $friend = array("Ankush","Priyanshu","Sawan","Gaurav","Shashank","Vedant","Rishi",);
    var_dump($friend);
    echo "<br>";



    $questions = "How was your day?";
    $questions = null;
    var_dump($questions);
    echo "<br>";

    echo strlen("Hello world!");
    echo "<br>";



    define("wishes","Good Morning!");
    echo wishes;
    echo "<br>";



    const greetings = "Good Evening!";
    echo greetings;
    echo "<br>";

    echo constant("wishes");
    echo "<br>";
    echo constant("greetings");
    echo "<br>";



    define("couses",[
        "CSE",
        "ECE",
        "ME",
        "CE",
        "PE",
        "EE",
        "MBA",
        "BBA",
        "BCA",
        "MCA"]);

    echo couses[0];
    echo "<br>";



    const c = array(
        "HTML",
        "CSS",
        "JS",
        "PHP",
        "JAVA",
    );

    echo c[1];
?>
</body>
</html>