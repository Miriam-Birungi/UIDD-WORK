<?php
session_start();

// Database configuration
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
$login = '';

// Process form when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $login = sanitizeInput($_POST['login']);
    $password = $_POST['password'];
    $rememberMe = isset($_POST['rememberMe']) ? true : false;

    // Validation
    if (empty($login)) {
        $errors[] = "Please enter your email or username";
    }

    if (empty($password)) {
        $errors[] = "Please enter your password";
    }

    // If no errors, proceed with authentication
    if (empty($errors)) {
        // Check if login is email or username
        $isEmail = filter_var($login, FILTER_VALIDATE_EMAIL);

        // Prepare SQL query
        if ($isEmail) {
            $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email = ?");
        } else {
            $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
        }

        $stmt->bind_param("s", $login);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            // Verify password
            if (password_verify($password, $user['password'])) {
                // Authentication successful
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                // Set remember me cookie if checked
                if ($rememberMe) {
                    $cookieValue = base64_encode($user['id'] . ':' . hash('sha256', $user['password']));
                    setcookie('remember_me', $cookieValue, time() + (30 * 24 * 60 * 60), '/');
                }

                // Redirect to dashboard
                header("Location: dashboard.php");
                exit();
            } else {
                $errors[] = "Invalid password";
            }
        } else {
            $errors[] = "User not found";
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
    <title>Login Status</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login-style.css">
</head>

<body>
    <div class="container">
        <?php if (!empty($errors)): ?>
            <div class="error-message">
                <h3>Login Failed</h3>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
                <p>Please <a href="login.html">try again</a>.</p>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>