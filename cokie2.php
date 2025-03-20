<?php
$default_theme = 'light';
$default_language = 'en';

// Handle Theme, Language & Name selection
if (isset($_POST['theme'])) {
    setcookie('user_theme', $_POST['theme'], time() + 3600, '/');
}

if (isset($_POST['language'])) {
    setcookie('user_language', $_POST['language'], time() + 3600, '/');
}

if (isset($_POST['name']) && !empty($_POST['name'])) {
    setcookie('user_name', $_POST['name'], time() + (7 * 24 * 60 * 60), '/'); // Cookie expires in 7 days
}

// Handle Reset Preferences
if (isset($_POST['reset'])) {
    setcookie('user_theme', '', time() - 3600, '/');
    setcookie('user_language', '', time() - 3600, '/');
    setcookie('user_name', '', time() - 3600, '/');
    setcookie('visit_count', '', time() - 3600, '/'); // Reset visit count
    header("Location: " . $_SERVER['PHP_SELF']); // Refresh to apply changes
    exit();
}

// Retrieve current settings
$current_theme = isset($_COOKIE['user_theme']) ? $_COOKIE['user_theme'] : $default_theme;
$current_language = isset($_COOKIE['user_language']) ? $_COOKIE['user_language'] : $default_language;
$user_name = isset($_COOKIE['user_name']) ? $_COOKIE['user_name'] : 'Guest';

// Define theme-based colors
$background_color = $current_theme === 'dark' ? '#333' : '#f4f4f4';
$text_color = $current_theme === 'dark' ? '#fff' : '#333';

// Track User Visit Count
if (isset($_COOKIE['visit_count'])) {
    $visit_count = $_COOKIE['visit_count'] + 1;
} else {
    $visit_count = 1;
}
setcookie('visit_count', $visit_count, time() + 86400, '/'); // Cookie expires in 1 day
?>
<html lang="en">
<head>
    <title>Cookie Preferences</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: <?php echo $background_color; ?>;
            color: <?php echo $text_color; ?>;
            margin: 20px;
        }
        h1, h2 {
            text-align: center;
        }
        form {
            width: 300px;
            margin: auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        select, input {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .reset-button {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Welcome <?php echo $user_name !== 'Guest' ? "back, $user_name!" : "to our website!"; ?></h1>

    <form method="post">
        <label for="name">Enter Your Name:</label>
        <input type="text" name="name" id="name" placeholder="Your Name" required>
        <button type="submit">Save Name</button>
    </form>

    <form method="post">
        <label for="theme">Select Theme:</label>
        <select name="theme" id="theme">
            <option value="light" <?php echo $current_theme === 'light' ? 'selected' : ''; ?>>Light</option>
            <option value="dark" <?php echo $current_theme === 'dark' ? 'selected' : ''; ?>>Dark</option>
        </select>
        <br><br>
        <label for="language">Select Language:</label>
        <select name="language" id="language">
            <option value="en" <?php echo $current_language === 'en' ? 'selected' : ''; ?>>EN</option>
            <option value="es" <?php echo $current_language === 'es' ? 'selected' : ''; ?>>ES</option>
            <option value="fr" <?php echo $current_language === 'fr' ? 'selected' : ''; ?>>FR</option>
            <option value="de" <?php echo $current_language === 'de' ? 'selected' : ''; ?>>DE</option>
        </select>
        <br><br>
        <button type="submit">Save Preferences</button>
    </form>

    <form method="post">
        <input type="hidden" name="reset" value="1">
        <button type="submit">Reset Preferences</button>
    </form>

    <h2>Current Settings</h2>
    <p style="text-align: center;">Theme: <?php echo ucfirst($current_theme); ?></p>
    <p style="text-align: center;">Language: <?php echo strtoupper($current_language); ?></p>
    <p style="text-align: center;">You have visited this website <strong><?php echo $visit_count; ?></strong> times.</p>
</body>
</html>
