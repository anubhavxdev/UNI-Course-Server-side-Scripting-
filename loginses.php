<!-- <?php

session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "your_database_name";

   
    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $user = $_POST['username'];
    $pass = $_POST['password'];

   
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
       
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $user;

       
        header("Location: dashboard.php");
        exit();
    } else {
         echo "Invalid username or password.";
    }

    
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html> -->


<?php
session_start();
?>
<!DOCTYPE html>
    <head><title>Login</title></head>
    <body>
    <h2>
    Login
    </h2>

        <form action="process_login.php" method="POST">
            <label>Enter Username</label>
            <input type="text" name="username" required><br><br>
            <label>Enter Password</label>
            <input type="password" name="password" required><br><br>
            <button type="submit">Login</button>
        </form>
    </body>
</html>