<?php
session_start();


if (!isset($_SESSION['form_data'])) {
    
    header('Location: single_form.php');
    exit();
}

$form_data = $_SESSION['form_data'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Results</title>
</head>
<body>

    <h2>Form Submission Details</h2>

    <p><strong>Name:</strong> <?php echo $form_data['name']; ?></p>
    <p><strong>Email:</strong> <?php echo $form_data['email']; ?></p>
    <p><strong>Age:</strong> <?php echo $form_data['age']; ?></p>
    <p><strong>Country:</strong> <?php echo $form_data['country']; ?></p>

    <?php if (!empty($form_data['file_message'])): ?>
        <p><strong>File Upload Status:</strong> <?php echo $form_data['file_message']; ?></p>
    <?php endif; ?>

    <a href="single_form.php">Go back to form</a>

</body>
</html>
