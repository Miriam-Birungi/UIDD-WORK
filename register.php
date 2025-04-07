<?php
// Database configuration (replace with your actual credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sportshub";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$errors = [];
$firstName = $lastName = $username = $email = '';

// Process form when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize inputs
    $firstName = sanitizeInput($_POST['firstName']);
    $lastName = sanitizeInput($_POST['lastName']);
    $username = sanitizeInput($_POST['username']);
    $email = sanitizeInput($_POST['email']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $agreeTerms = isset($_POST['agreeTerms']) ? true : false;

    // Validation
    if (empty($firstName)) {
        $errors['firstName'] = "First name is required";
    }

    if (empty($lastName)) {
        $errors['lastName'] = "Last name is required";
    }

    if (empty($username)) {
        $errors['username'] = "Username is required";
    } elseif (strlen($username) < 4) {
        $errors['username'] = "Username must be at least 4 characters";
    } else {
        // Check if username exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $errors['username'] = "Username already taken";
        }
        $stmt->close();
    }

    if (empty($email)) {
        $errors['email'] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format";
    } else {
        // Check if email exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $errors['email'] = "Email already registered";
        }
        $stmt->close();
    }

    if (empty($password)) {
        $errors['password'] = "Password is required";
    } elseif (strlen($password) < 8) {
        $errors['password'] = "Password must be at least 8 characters";
    }

    if ($password !== $confirmPassword) {
        $errors['confirmPassword'] = "Passwords do not match";
    }

    if (!$agreeTerms) {
        $errors['agreeTerms'] = "You must agree to the terms and conditions";
    }

    // If no errors, proceed with registration
    if (empty($errors)) {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert into database
        $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, username, email, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $firstName, $lastName, $username, $email, $hashedPassword);

        if ($stmt->execute()) {
            // Registration successful
            header("Location: login.html");
            exit();
        } else {
            $errors['database'] = "Error: " . $stmt->error;
        }
        $stmt->close();
    }
}

$conn->close();

// Function to sanitize input
function sanitizeInput($data)
{
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
    <title>Registration Status</title>
    <link rel="stylesheet" href="sign.css">
</head>

<body>
    <div class="container">
        <?php if (!empty($errors)): ?>
            <div class="error-message">
                <h2>Registration Failed</h2>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
                <p>Please <a href="sign.html">try again</a>.</p>
            </div>
        <?php else: ?>
            <div class="success-message">
                <h2>Registration Successful!</h2>
                <p>Welcome to SportsHub, <?php echo htmlspecialchars($firstName); ?>!</p>
                <p>You can now <a href="login.html">sign in</a> to your account.</p>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>