<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sports Hub | Home</title>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="index.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container header-flex">
            <div class="navbar-brand">
                <span class="logo-sh">SH</span>
                <span class="logo-text">SportsHub</span>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.html" class="btn">Sign In</a></li>
                </ul>
            </nav>
        </div>
    </header>
    

    <section class="hero">
        <div class="container">
            <h2>Welcome to Sports Hub</h2>
            <p>Your #1 source for live sports scores, news, highlights, and more!</p>
            <a href="sign.html" class="btn-primary">Join Now</a>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="feature">
                <h3>Live Scores</h3>
                <p>Track real-time scores across multiple leagues and tournaments.</p>
            </div>
            <div class="feature">
                <h3>News & Updates</h3>
                <p>Stay informed with curated sports news and analysis from trusted sources.</p>
            </div>
            <div class="feature">
                <h3>Custom Dashboard</h3>
                <p>Sign in to personalize your sports feed, favorite teams, and alerts.</p>
            </div>
        </div>
    </section>

    <!-- Include footer.php -->
    <?php include('footer.php'); ?>
</body>
</html>
