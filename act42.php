<?php
// Set a cookie
if (!isset($_COOKIE['username'])) {
    // If the cookie is not set, set it with a default value
    $username = "Guest";
    setcookie("username", $username, time() + (86400 * 7), "/"); // Expires in 7 days
} else {
    // Retrieve the cookie value
    $username = $_COOKIE['username'];
}

// Update the cookie if a new name is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['new_username'])) {
    $username = htmlspecialchars($_POST['new_username']);
    setcookie("username", $username, time() + (86400 * 7), "/"); // Update cookie with new value
}

// Delete the cookie if requested
if (isset($_POST['delete_cookie'])) {
    setcookie("username", "", time() - 3600, "/"); // Expire the cookie
    $username = "Guest"; // Reset to default
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalized Greeting</title>
</head>
<body>
    <h1>Welcome, <?php echo $username; ?>!</h1>

    <form method="post">
        <label for="new_username">Enter your name:</label>
        <input type="text" id="new_username" name="new_username" required>
        <button type="submit">Update Name</button>
    </form>

    <form method="post">
        <button type="submit" name="delete_cookie">Delete Cookie</button>
    </form>
</body>
</html>