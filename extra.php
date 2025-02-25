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
            width: 350px;
            position: relative;
            text-align: center;
        }
        h1 { color: #333; }
        label { display: block; margin-bottom: 8px; text-align: left; color: #555; }
        input, select {
            width: 100%; padding: 8px; margin-bottom: 10px;
            border: 1px solid #ccc; border-radius: 4px;
        }
        input:focus { border-color: #28a745; }
        button {
            width: 100%; padding: 10px; background-color: #28a745;
            border: none; border-radius: 4px; color: #fff; font-size: 16px;
            cursor: pointer; transition: background-color 0.3s;
        }
        button:hover { background-color: #218838; }
        .error { color: red; margin-bottom: 10px; }
        .success { color: green; margin-bottom: 10px; }
        .celebration {
            display: none; position: fixed; top: 0; left: 0;
            width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);
            justify-content: center; align-items: center; z-index: 2;
            color: white; font-size: 24px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Student Registration</h1>

    <?php
    $name = $email = $age = $course = $phone = $gender = "";
    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"]) || !preg_match("/^[a-zA-Z-' ]+$/", $_POST["name"])) {
            $errors[] = "Valid name is required.";
        } else {
            $name = htmlspecialchars($_POST["name"]);
        }

        if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Valid email is required.";
        } else {
            $email = htmlspecialchars($_POST["email"]);
        }

        if (empty($_POST["age"]) || !filter_var($_POST["age"], FILTER_VALIDATE_INT, ["options" => ["min_range" => 16, "max_range" => 100]])) {
            $errors[] = "Valid age (16-100) is required.";
        } else {
            $age = htmlspecialchars($_POST["age"]);
        }

        if (empty($_POST["course"])) {
            $errors[] = "Course field is required.";
        } else {
            $course = htmlspecialchars($_POST["course"]);
        }

        if (empty($_POST["phone"]) || !preg_match("/^[0-9]{10}$/", $_POST["phone"])) {
            $errors[] = "Valid 10-digit phone number is required.";
        } else {
            $phone = htmlspecialchars($_POST["phone"]);
        }

        if (empty($_POST["gender"])) {
            $errors[] = "Please select a gender.";
        } else {
            $gender = htmlspecialchars($_POST["gender"]);
        }

        $interests = isset($_POST["interests"]) ? $_POST["interests"] : [];
        $interestsList = implode(", ", array_map("htmlspecialchars", $interests));

        if (empty($errors)) {
            echo "<p class='success'>🎉 Registration Successful! 🎉</p>";
            echo "<p class='success'>Welcome, <b>$name</b>!</p>";
            echo "<p class='success'>Email: $email</p>";
            echo "<p class='success'>Age: $age</p>";
            echo "<p class='success'>Course: $course</p>";
            echo "<p class='success'>Phone: $phone</p>";
            echo "<p class='success'>Gender: $gender</p>";
            echo "<p class='success'>Interests: $interestsList</p>";
            echo "<script>document.querySelector('.celebration').style.display = 'flex';</script>";
        } else {
            foreach ($errors as $error) {
                echo "<p class='error'>$error</p>";
            }
        }
    }
    ?>

    <form method="post" action="" id="registrationForm">
        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Age:</label>
        <input type="number" name="age" min="16" max="100" required>

        <label>Course:</label>
        <input type="text" name="course" required>

        <label>Phone Number:</label>
        <input type="tel" name="phone" pattern="[0-9]{10}" required>

        <label>Gender:</label>
        <select name="gender" required>
            <option value="">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>

        <label>Interests:</label>
        <input type="checkbox" name="interests[]" value="Sports"> Sports
        <input type="checkbox" name="interests[]" value="Music"> Music
        <input type="checkbox" name="interests[]" value="Reading"> Reading

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</div>

<div class="celebration">🎉 Congratulations! 🎉</div>

<script>
    document.getElementById("registrationForm").addEventListener("submit", function(event) {
        if (document.querySelectorAll(".error").length === 0) {
            document.querySelector(".celebration").style.display = "flex";
            setTimeout(() => { document.querySelector(".container").style.display = "none"; }, 500);
        }
    });
</script>

</body>
</html>
