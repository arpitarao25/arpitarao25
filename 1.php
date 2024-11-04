<?php
// Initialize error variables
$nameError = $emailError = $passwordError = $genderError = $bioError = $termsError = "";
$name = $email = $password = $gender = $bio = "";
$isValid = true;

// Form validation logic on form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Name (required, min length 3 characters)
    if (empty($_POST["name"])) {
        $nameError = "Name is required.";
        $isValid = false;
    } else {
        $name = sanitizeInput($_POST["name"]);
        if (strlen($name) < 3) {
            $nameError = "Name must be at least 3 characters long.";
            $isValid = false;
        }
    }

    // Validate Email (required, must be valid email format)
    if (empty($_POST["email"])) {
        $emailError = "Email is required.";
        $isValid = false;
    } else {
        $email = sanitizeInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format.";
            $isValid = false;
        }
    }

    // Validate Password (required, min length 8 characters, must contain a number)
    if (empty($_POST["password"])) {
        $passwordError = "Password is required.";
        $isValid = false;
    } else {
        $password = sanitizeInput($_POST["password"]);
        if (strlen($password) < 8 || !preg_match("/[0-9]/", $password)) {
            $passwordError = "Password must be at least 8 characters long and contain at least one number.";
            $isValid = false;
        }
    }

    // Validate Gender (required)
    if (empty($_POST["gender"])) {
        $genderError = "Please select a gender.";
        $isValid = false;
    } else {
        $gender = sanitizeInput($_POST["gender"]);
    }

    // Validate Bio (required, min length 20 characters)
    if (empty($_POST["bio"])) {
        $bioError = "Bio is required.";
        $isValid = false;
    } else {
        $bio = sanitizeInput($_POST["bio"]);
        if (strlen($bio) < 20) {
            $bioError = "Bio must be at least 20 characters long.";
            $isValid = false;
        }
    }

    // Validate Terms and Services checkbox (must be checked)
    if (!isset($_POST['terms'])) {
        $termsError = "You must agree to the terms and services.";
        $isValid = false;
    }

    // If all inputs are valid, redirect to success page
    if ($isValid) {
        // Start a session to store form data temporarily
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['gender'] = $gender;
        $_SESSION['bio'] = $bio;
        
        // Redirect to success page
        header("Location: 2.php");
        exit();
    }
}

// Function to sanitize user inputs
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
            color: #555;
            margin-top: 10px;
            display: block;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        .error {
            color: red;
            font-size: 0.9em;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registration Form</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <!-- Text input (Name) -->
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>">
            <span class="error"><?php echo $nameError; ?></span>

            <!-- Email input -->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>">
            <span class="error"><?php echo $emailError; ?></span>

            <!-- Password input -->
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <span class="error"><?php echo $passwordError; ?></span>

            <!-- Select input (Gender) -->
            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
                <option value="">--Select Gender--</option>
                <option value="male" <?php if($gender == 'male') echo 'selected'; ?>>Male</option>
                <option value="female" <?php if($gender == 'female') echo 'selected'; ?>>Female</option>
                <option value="other" <?php if($gender == 'other') echo 'selected'; ?>>Other</option>
            </select>
            <span class="error"><?php echo $genderError; ?></span>

            <!-- Textarea (Bio) -->
            <label for="bio">Short Bio:</label>
            <textarea id="bio" name="bio" rows="4"><?php echo $bio; ?></textarea>
            <span class="error"><?php echo $bioError; ?></span>

            <!-- Agree to Terms -->
            <label>
                <input type="checkbox" name="terms" <?php if (isset($_POST['terms'])) echo "checked"; ?>>
                I agree to the <a href="#">Terms and Services</a>
            </label>
            <span class="error"><?php echo $termsError; ?></span>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>