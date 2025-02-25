<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 300px;
            position: relative;
            z-index: 1;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="tel"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="number"]:focus,
        input[type="tel"]:focus {
            border-color: #28a745;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #218838;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
        .success {
            color: green;
            margin-bottom: 10px;
        }
        .background-effect {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }
        .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            animation: move 20s linear infinite;
        }
        @keyframes move {
            0% {
                transform: translateY(0) translateX(0);
            }
            100% {
                transform: translateY(-1000px) translateX(1000px);
            }
        }
        .celebration {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 2;
        }
        .celebration .message {
            color: #fff;
            font-size: 24px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="background-effect">
    <div class="circle" style="width: 100px; height: 100px; top: 50%; left: 50%;"></div>
    <div class="circle" style="width: 150px; height: 150px; top: 20%; left: 20%;"></div>
    <div class="circle" style="width: 200px; height: 200px; top: 80%; left: 80%;"></div>
</div>

<div class="container">
    <h1>Student Registration</h1>
    <?php
    $name = "";
    $email = "";
    $age = "";
    $course = "";
    $phone = "";
    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $errors[] = "Name field is required.";
        } else {
            $name = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $errors[] = "Only letters, spaces, apostrophes, and hyphens are allowed in the name.";
            }
        }

        if (empty($_POST["email"])) {
            $errors[] = "Email field is required.";
        } else {
            $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Invalid email format.";
            }
        }

        if (empty($_POST["age"])) {
            $errors[] = "Age field is required.";
        } else {
            $age = filter_var(trim($_POST["age"]), FILTER_SANITIZE_NUMBER_INT);
            if (!filter_var($age, FILTER_VALIDATE_INT)) {
                $errors[] = "Invalid age format.";
            }
        }

        if (empty($_POST["course"])) {
            $errors[] = "Course field is required.";
        } else {
            $course = filter_var(trim($_POST["course"]), FILTER_SANITIZE_STRING);
        }

        if (empty($_POST["phone"])) {
            $errors[] = "Phone number field is required.";
        } else {
            $phone = filter_var(trim($_POST["phone"]), FILTER_SANITIZE_STRING);
            if (!preg_match("/^[0-9]{10}$/", $phone)) {
                $errors[] = "Invalid phone number format. Please enter a 10-digit phone number.";
            }
        }

        if (empty($errors)) {
            echo "<p class='success'>Form submitted successfully! Welcome, " . htmlspecialchars($name) . ".</p>";
            echo "<p class='success'>Your email: " . htmlspecialchars($email) . "</p>";
            echo "<p class='success'>Your age: " . htmlspecialchars($age) . "</p>";
            echo "<p class='success'>Your course: " . htmlspecialchars($course) . "</p>";
            echo "<p class='success'>Your phone number: " . htmlspecialchars($phone) . "</p>";
            echo "<script>document.querySelector('.celebration').style.display = 'flex';</script>";
        } else {
            foreach ($errors as $error) {
                echo "<p class='error'>$error</p>";
            }
        }
    }
    ?>

    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="<?php echo htmlspecialchars($age); ?>">

        <label for="course">Course:</label>
        <input type="text" id="course" name="course" value="<?php echo htmlspecialchars($course); ?>">

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>">

        <button type="submit">Submit</button>
    </form>
</div>

<div class="celebration">
    <div class="message">🎉 Congratulations! 🎉</div>
</div>

<script>
    document.querySelector('form').addEventListener('submit', function(event) {
        if (document.querySelectorAll('.error').length === 0) {
            document.querySelector('.celebration').style.display = 'flex';
        }
    });
</script>

</body>
</html>
