<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays PHP</title>
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
        <h1 style="text-align: center; color: white;">PHP Arrays</h1>
    </header>

    <main style="padding: 20px; text-align: center;">
    <?PHP
    echo "<h2>Simple Array</h2>";
    echo"<br>";
    $courses = array("PHP", "Java", "Python", "C++", "C#");
    echo "I like " . $courses[0] . ", " . $courses[1] . ", " . $courses[2] . ", " . $courses[3] . " and " . $courses[4] . ".<br>";
    echo "<br>";
    echo count($courses) ."<br>";
    echo "<hr>";

    //loop through an indexed array
    $courses = array("PHP", "Java", "Python", "C++", "C#");
    $courseslength = count($courses);

    for($x = 0; $x < $courseslength; $x++){
        echo "". $courses[$x] ."";
        echo "<br>";
    }
    echo"<hr>";
    //loop through indexed array using foreach loop
    foreach ($courses as $course) {
        echo $course;
        echo "<br>";
    }
    echo "<hr>";
    echo "<br>";
    echo "<hr>";


    //Associative array
    echo "<h2>Associative Array</h2>";
    $courses = array("INT220" => "PHP", "INT322" => "Java", "INT321" => "Python", "INT320" => "C++", "INT329" => "C#");
    echo "INT220 is " . $courses['INT220'] . "<br>";
    echo "INT322 is " . $courses['INT322'] . "<br>";
    echo "INT321 is " . $courses['INT321'] . "<br>";
    echo "INT320 is " . $courses['INT320'] . "<br>";
    echo "INT329 is " . $courses['INT329'] . "<br>";

    echo "<hr>";
    echo "<br>";
    echo "<hr>";

    echo "<h2>Multidimensional Array</h2>";
    echo "<br>";

    $result = array(
        array("PHP", 80, 90),
        array("Java", 90, 80),
        array("C/CPP ",0, 0),
    );

    echo $result[0][0]. " Scored " . $result[0][1] . " in Theory and " . $result[0][2] . " in Practical.<br>";
    echo $result[1][0]. " Scored " . $result[1][1] . " in Theory and " . $result[1][2] . " in Practical.<br>";
    echo $result[2][0]. " Scored " . $result[2][1] . " in Theory and " . $result[2][2] . " in Practical.<br>";

    echo"<br>";
    echo "<hr>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";

    
    $vipin = array(
        array("Ankush", 8.1, "SDE Amazon Confirm"),
        array("Priyanshu", 8.4, "Microsoft Confirm"),
        array("Anubhav", 7.6, "Wissen Technology Confirm"),
        array("Pintu", 7.1, "Capgemini Confirm")
    );
    
    for ($row = 0; $row < count($vipin); $row++) {
        echo "<h4> Papa Gang Member $row </h4>";
    
        foreach ($vipin[$row] as $value) {
            echo "<p> $value </p>";
        }
    }
   
    echo"<br>";
    echo "<hr>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";

    
    echo "<h2>Array Operators</h2>";
    $array1 = array("a" => "red", "b" => "green");
    $array2 = array("c" => "blue", "d" => "yellow");

    // Union of $array1 and $array2
    $union = $array1 + $array2;
    echo "Union of \$array1 and \$array2: ";
    print_r($union);
    echo "<br>";

    // Equality
    if ($array1 == $array2) {
        echo "\$array1 is equal to \$array2<br>";
    } else {
        echo "\$array1 is not equal to \$array2<br>";
    }

    // Identity
    if ($array1 === $array2) {
        echo "\$array1 is identical to \$array2<br>";
    } else {
        echo "\$array1 is not identical to \$array2<br>";
    }

    // Inequality
    if ($array1 != $array2) {
        echo "\$array1 is not equal to \$array2<br>";
    }

    // Non-identity
    if ($array1 !== $array2) {
        echo "\$array1 is not identical to \$array2<br>";
    }

    echo"<br>";
    echo "<hr>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";

    //Task with Indexed Array 
    echo "<h2>Task with Indexed Array</h2>";
    echo "<br>";

    echo "Question 1";
    echo "<br>";
    
    // Create an indexed array
    echo "<h3>Create an indexed array</h3>";
    $fruits = array("Apple", "Banana", "Cherry");
    echo "<br>";
    // Access the elements in indexed array
    echo "<h3>Access the elements in indexed array</h3>";
    echo "I like " . $fruits[0] . ", " . $fruits[1] . " and " . $fruits[2] . ".<br>";
    echo "<br>";
    // Looping through an indexed array
    echo "<h3>Looping through an indexed array</h3>";
    echo "Fruits list:<br>";
    for ($i = 0; $i < count($fruits); $i++) {
        echo $fruits[$i] . "<br>";
    }
    echo "<br>";
    // Adding elements to an indexed array
    echo "<h3>Adding elements to an indexed array</h3>";
    $fruits[] = "Date";
    $fruits[] = "Elderberry";
    echo "After adding elements:<br>";
    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }
    echo "<br>";
    // Counting elements in an indexed array
    echo "<h3>Counting elements in an indexed array</h3>";
    echo "Total number of fruits: " . count($fruits) . "<br>";
    echo "<br>";
    // Removing elements from indexed array
    echo "<h3>Removing elements from indexed array</h3>";
    unset($fruits[1]); // Remove "Banana"
    echo "After removing an element:<br>";
    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }

    
    echo"<br>";
    echo "<hr>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";

    echo "<h3>Array_Combine()</h3>";

    $name = ["Ankush","Priyanshu","Pintu","Anubhav","Gaurav","Gagandeep","Virat"];
    $marks = ["56","62","75","80","96","91","88"];
    $c = array_combine($name, $marks);
    print_r($c);
    echo "<br>";
    
    echo"<br>";
    echo "<hr>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";

    echo "<h3>Array_Chunks()</h3>";
    $course = array("a"=>"PHP", "b"=>"Java", "c"=>"Python", "d"=>"C++", "e"=>"C#");
    print_r(array_chunk($course, 2, true));
    echo "<br>";
    echo "<br>";
    
    echo "another example";
    $course = array("a"=> "PHP", "b"=> "Java", "c"=> "Python", "d"=> "C++", "e"=> "C#");
    print_r(array_chunk($course, 2, true));

     
    echo"<br>";
    echo "<hr>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";

    echo "<h3>Array_Counts_value()</h3>";
    echo "<br>";

    $a=array("Cow","Cat","Dog","Buffalo","Dog");
    print_r($a);
    echo "<br>";

      
    echo"<br>";
    echo "<hr>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";

    echo "<h3>Array_difff</h3>";
    echo "<br>";

    $a1 = ["a" => "red", "b" => "green", "c" => "yellow", "d" => "blue"];
    $a2 = ["e" => "red", "f" => "green", "g" => "purple"];
    $a3 = ["h" => "mango", "i" => "cheery"];
    $res=array_diff(array_keys($a1), array_keys($a2));
    $result=array_diff($a2,$a1);
    print_r($result);
    print_r($res) ;

      
    echo"<br>";
    echo "<hr>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";

    echo "<h3>Array_intersect</h3>";
    echo "<br>";

    $a1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
    $a2=["e"=> "seagreen","f"=> "white","g"=> "mint"];
    $a3=["red","green","blue"];
    $result=array_intersect($a1,$a2,$a3);
    print_r($result);


     
    echo"<br>";
    echo "<hr>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";

    echo "<h3>Array_merge</h3>";
    echo "<br>";

    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    $result = array_merge($array1, $array2);
    print_r($result);

    
    echo"<br>";
    echo "<hr>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";

    echo "<h3>Array_merge</h3>";
    echo "<br>";


    $a = array("red","green","blue","yellow");
    array_pop($a);
    print_r($a);

    $a=array("a"=>"red","b"=>"green","c"=>"blue");
    array_pop($a);
    echo"<br>";
    print_r($a);

    
     
    echo"<br>";
    echo "<hr>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";

    echo "<h3>Array_reverse</h3>";
    echo "<br>";

    $colors = array("red", "green", "blue", "yellow");
    $reversedColors = array_reverse($colors);
    print_r($reversedColors);


    echo"<br>";
    echo "<hr>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";

    echo "<h3>Array_search</h3>";
    echo "<br>";

    $colors = array("red", "green", "blue", "yellow");
    $search = array_search("blue", $colors);
    if ($search !== false) {
        echo "Found 'blue' at index: " . $search;
    } else {
        echo "'blue' not found in the array.";
    }


    
    echo"<br>";
    echo "<hr>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";


    echo "<h3>Array_slice</h3>";
    echo "<br>";

    $input = array("a", "b", "c", "d", "e");
    $slice = array_slice($input, 2, 2);
    print_r($slice);

    
    echo"<br>";
    echo "<hr>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";


    echo "<h3>Array_column</h3>";
    echo "<br>";
    
    $records = array(
        array(
            'id' => 1,
            'name' => 'John',
            'age' => 28,
        ),
        array(
            'id' => 2,
            'name' => 'Jane',
            'age' => 24,
        ),
        array(
            'id' => 3,
            'name' => 'Doe',
            'age' => 30,
        ),
    );

    $names = array_column($records, 'name');
    print_r($names);

    ?>
    </main>
    <footer style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%); height:auto; width: auto; padding: 1px;">
        <h3 style="text-align: center; color: white;">&copy; Anubhav Jaiswal 2025</h3>
</body>
</html>