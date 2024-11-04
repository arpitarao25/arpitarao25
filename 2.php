<?php
session_start();

// Check if session variables are set (if the user came from the form)
if (!isset($_SESSION['name']) || !isset($_SESSION['email'])) {
    // If session is not set, redirect to the form page
    header("Location: form_validation.php");
    exit();
}

// Retrieve session data
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$gender = $_SESSION['gender'];
$bio = $_SESSION['bio'];

// Clear session data
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submitted</title>
</head>
<body>
    <h1>Form Submitted Successfully!</h1>
    <p>Thank you for registering. Here are the details you submitted:</p>
    <ul>
        <li><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></li>
        <li><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></li>
        <li><strong>Gender:</strong> <?php echo htmlspecialchars($gender); ?></li>
        <li><strong>Bio:</strong> <?php echo htmlspecialchars($bio); ?></li>
    </ul>
</body>
</html>
