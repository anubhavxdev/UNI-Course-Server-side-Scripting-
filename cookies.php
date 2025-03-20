<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php
    $cookie_name = "Anubhav";
    $theme_cookie_name = "theme";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cookie_value = $_POST["cookie_value"];
        $theme_cookie_value = $_POST["theme_cookie_value"];

        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
        setcookie($theme_cookie_name, $theme_cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

        header("Location: " . $_SERVER["PHP_SELF"]);
        exit();
    }

    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!<br>";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value: " . $_COOKIE[$cookie_name] . "<br>";
    }

    if (!isset($_COOKIE[$theme_cookie_name])) {
        echo "Theme cookie is not set!<br>";
    } else {
        echo "Theme cookie is set!<br>";
        echo "Theme: " . $_COOKIE[$theme_cookie_name] . "<br>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="cookie_value">Cookie Value:</label>
        <input type="text" id="cookie_value" name="cookie_value" required><br><br>
        <label for="theme_cookie_value">Theme Cookie Value:</label>
        <input type="text" id="theme_cookie_value" name="theme_cookie_value" required><br><br>
        <input type="submit" value="Set Cookies">
    </form>
</body>
</html>
