<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Contact Submitted</title>
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background: #f7f9fc;
                margin: 0;
                padding: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }

            .response-box {
                background-color: white;
                padding: 40px;
                border-radius: 10px;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
                max-width: 600px;
                width: 90%;
                text-align: center;
            }

            .response-box h2 {
                color: #28a745;
                margin-bottom: 20px;
            }

            .response-box p {
                font-size: 18px;
                margin: 10px 0;
                color: #333;
            }

            .response-box strong {
                color: #007bff;
            }

            .back-btn {
                display: inline-block;
                margin-top: 25px;
                padding: 10px 20px;
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 5px;
                text-decoration: none;
                font-weight: bold;
                transition: background-color 0.3s ease;
            }

            .back-btn:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class="response-box">
            <h2>Thank you for contacting us!</h2>
            <p><strong>Name:</strong> <?php echo $name; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Message:</strong> <?php echo nl2br($message); ?></p>
            <a href="contact.php" class="back-btn">Go Back</a>
        </div>
    </body>
    </html>

    <?php
} else {
    echo "Invalid access.";
}
?>
