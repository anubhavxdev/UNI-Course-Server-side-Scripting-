<?php
session_start();
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] !== true){
    echo "Access denied. Please login first";
}
?>
<html>
    <head><title>Dashboard</title></head>
    <body>
        <h2>Dashboard</h2>
        <p>Welcome, <?php echo $_SESSION['username']; ?></p>
        <a href = "logout.php">Logout</a>
    </body>
</html>