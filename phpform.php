<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>PHP Form Handling</title>
</head>
<body class="bg-gray-200">
    <h1 class="text-4xl text-center">PHP Form Handling</h1>
    <p class="text-center">HTML form is used to collect user input. The input collected by the form is sent to the server for processing.</p>
    
<!-- form  -->
    <!-- <form action="post.php" method="POST" class="max-w-lg mx-auto mt-8 p-4 border rounded shadow-md">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
            <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">E-mail:</label>
            <input type="email" name="email" id="email" class="w-full px-3 py-2 border rounded">
        </div>
        <div class="mb-4"></div>
            <label for="phone" class="block text-gray-700 font-bold mb-2">Phone:</label>
            <input type="tel" name="phone" id="phone" class="w-full px-3 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="message" class="block text-gray-700 font-bold mb-2">Message:</label>
            <textarea name="message" id="message" class="w-full px-3 py-2 border rounded"></textarea>
        </div>
        <div class="text-center">
            <input type="submit" value="Submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 transition">
        </div>
    </form> -->

  
    <?php

$email = "anubhavjaiswal@awslpu.com";
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Email is valid<br>";
}else{
    echo "Email is not valid<br>";
}


$URL = "https://www.google.com";
if(filter_var($URL, FILTER_VALIDATE_URL)){
    echo "URL is valid<br>";    
}else{  
    echo "URL is not valid<br>";
}


$email = "aj9170013@gmail.com";
$updated_email = filter_var($email, FILTER_SANITIZE_EMAIL);
echo "Original Email: $email<br>";
echo "Updated Email: $updated_email<br>";


$string = "<h1>Hello World</h1>";
$updated_string = filter_var($string, FILTER_SANITIZE_STRING);
echo "Original String: $string<br>";
echo "Updated String: $updated_string<br>";






    ?>
</body>
</html>