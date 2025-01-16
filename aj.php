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
    echo "<br>";



    echo "The current line number is".__LINE__.".";
    echo"<br>";
    echo "Current PHP script name is".__FILE__.".";
    echo "<br>";

    echo "Directory of the Current PHP script is".__DIR__.".";
    echo "<br>";


    function hello(){
        $a="Hello World!";
        echo "$a. The function name is ".__FUNCTION__.".";
    }
    hello();



    $a = 5;
    $b = 5.35;
    $c = "Hello";
    $d = true;
    $e = NULL;

    
    $a = (string) $a;
    $b = (string) $b;
    $c = (string) $c;
    $d = (string) $d;
    $e = (string) $e;


    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    var_dump($d);
    echo "<br>";
    var_dump($e);
    echo "<br>";



    var_dump(40);
    echo "<br>";
    var_dump("aman");
    echo "<br>";
    var_dump("2.22");
    echo "<br>";
    var_dump(false);
    echo "<br>";
    var_dump([21,13,16]);
    echo "<br>";
    var_dump(NULL);
    echo "<br>";

    $x = $y = $z = "Anubhav";
    echo $x;
    echo $y;
    echo $z;

    $x = 5985;
    echo"<br>";
    var_dump(is_int($x));
    echo"<br>";
    var_dump(is_integer($x));

    $y = 59.85;
    var_dump(is_float($y));
    echo "<br>";

//TYPE CASTING

    $saiyam = "25 kilometere";
    $saiyam = (int) $saiyam;
    echo $saiyam;
    var_dump(is_int($saiyam));
    echo"<br>";


    $rishi = "kilometere 25";
    $rishi = (int) $rishi;
    echo $rishi;
    echo"<br>";

    $am = "25 kilometere";
    $am = (FLOAT) $am;
    echo $am;
    var_dump(is_int($am));
    echo"<br>";
    


    $i = 5;
    $i = (bool) $i;
    echo $i;    
    echo "<br>";

    $ii = 5.34;
    $ii = (bool) $ii;
    echo $ii;
    echo "<br>";

    $iii = 0;
    $ii = (bool) $iii;
    echo $ii;
    echo "<br>";

    $iv = -1;
    echo $iv;
    echo "<br>";

    $v = 0.1;
    $v = (bool) $v;
    echo $v;
    echo "<br>";

    $vii = "hello";
    $vii = (bool) $vii;
    echo $vii;
    echo "<br>";

    $viii = "";
    $viii = (bool) $viii;
    echo $viii;
    echo "<br>";

    $ix = true;
    $ix = (bool) $ix;
    echo $ix;
    echo "<br>";

    $x = NULL;
    $x = (bool) $x;
    echo $x;
    echo "<br>";
    echo "<br>";


    $string = "10";
    $int = 5;
    $result = (int)$string + $int;
    echo $result;



 ?>
</body>
</html>