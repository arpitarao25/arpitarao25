<?php
session_start();

// Function to set a cookie
function setCookieValue($name, $value, $expire = 3600) {
    setcookie($name, $value, time() + $expire, "/");
}

// Function to get a cookie value
function getCookieValue($name) {
    return isset($_COOKIE[$name]) ? $_COOKIE[$name] : 'Cookie not set';
}

// Function to delete a cookie
function deleteCookie($name) {
    setcookie($name, '', time() - 3600, "/");
}

// Function to start a session with a timeout check
function startSession($timeout = 1800) {
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']) > $timeout) {
        session_unset();     // unset $_SESSION variable for the runtime
        session_destroy();   // destroy session data in storage
        echo "Session timed out and destroyed.<br>";
    }
    $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
}

// Function to delete a session
function deleteSession() {
    session_unset();     // unset $_SESSION variable for the runtime
    session_destroy();   // destroy session data in storage
    echo "Session deleted.<br>";
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['register'])) {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        
        // Set a cookie with the username
        setCookieValue('username', $username);
        echo "Cookie Set: " . getCookieValue('username') . "<br>";
        
        // Start or refresh session
        startSession();
        $_SESSION['username'] = $username;
        echo "Session Started for: " . $_SESSION['username'] . "<br>";
    }

    if (isset($_POST['delete_cookie'])) {
        deleteCookie('username');
        echo "Cookie Deleted.<br>";
    }

    if (isset($_POST['delete_session'])) {
        deleteSession();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
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
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .message {
            text-align: center;
            margin-top: 10px;
            color: #d9534f;
        }
        .info {
            text-align: center;
            margin-top: 10px;
            color: #5bc0de;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registration Form</h1>
        <form method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <input type="submit" name="register" value="Register">
        </form>

        <h2>Manage Cookies and Sessions</h2>
        <form method="post">
            <input type="submit" name="delete_cookie" value="Delete Cookie">
            <input type="submit" name="delete_session" value="Delete Session">
        </form>

        <div class="info">
            <p>Cookie Value: <?php echo getCookieValue('username'); ?></p>
            <p>Session Data: <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'No session data'; ?></p>
        </div>
    </div>
</body>
</html>
