<?php
// Define some countries for dynamic dropdown
$countries = ['USA', 'Canada', 'UK', 'Australia'];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_form'])) {
    // Sanitize user input
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $age = htmlspecialchars($_POST['age'] ?? '');
    $country = htmlspecialchars($_POST['country'] ?? '');

    // Handle file upload
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $uploadDir = 'uploads/';
        $uploadFilePath = $uploadDir . $fileName;

        if (move_uploaded_file($fileTmpPath, $uploadFilePath)) {
            $file_message = "File uploaded successfully: $fileName";
        } else {
            $file_message = "Error uploading file!";
        }
    }

    // Save data to session or pass to next page via URL
    session_start();
    $_SESSION['form_data'] = [
        'name' => $name,
        'email' => $email,
        'age' => $age,
        'country' => $country,
        'file_message' => $file_message ?? null
    ];

    // Redirect to result page
    header('Location: result_page.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Example</title>
</head>
<body>

    <h2>User Information Form</h2>

    <form action="single_form.php" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" min="18" max="100" required><br><br>

        <label for="country">Country:</label>
        <select name="country" id="country">
            <?php foreach ($countries as $country): ?>
                <option value="<?php echo $country; ?>"><?php echo $country; ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <label for="file">Upload File:</label>
        <input type="file" id="file" name="file" accept="image/*"><br><br>

        <input type="submit" name="submit_form" value="Submit">
    </form>

</body>
</html>
