<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : "Not provided";
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : "Not provided";
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : "Not provided";
    $address = isset($_POST['address']) ? htmlspecialchars($_POST['address']) : "Not provided";

    echo "Form Submitted Successfully<br>";
    echo "Name: $name<br>";
    echo "E-mail: $email<br>";
    echo "Phone: $phone<br>";
    echo "Address: $address<br>";
} else {
    echo "Invalid Request";
}
?>
