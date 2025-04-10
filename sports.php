<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Sports | SportsHub</title>
    <link rel="stylesheet" href="sports.css"> <!-- Link to the external CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="container navbar-container">
            <div class="navbar-brand">
                <span class="logo-sh">SH</span>
                <span class="logo-text">SportsHub</span>
            </div>
            <div class="navbar-links">
                <a href="dashboard.php">Home</a>
                <a href="live-scores.php">LiveScores</a>
                <a href="sports.php" class="active">More Sports</a>
            </div>
            
        </div>
    </nav>

    <!-- Main Content -->
    <main class="more-sports-main">
        <div class="container">
            <header class="page-header">
                <h1 class="page-title">Explore More Sports</h1>
                <p>Discover more sports and their live updates.</p>
            </header>

            <section class="sports-list-section">
                <div class="sports-list-container">
                    <div class="sport-card">
                <div class="sport-card">
                        <img src="cricket.jpg" alt="Cricket">
                        <h3>Cricket</h3>
                       
                    </div>
                    <div class="sport-card">
                        <img src="rugby.jpg" alt="Rugby">
                        <h3>Rugby</h3>
                        
                    </div>
                    <div class="sport-card">
                        <img src="golf.jpg" alt="Formula 1">
                        <h3>Golf</h3>
                        
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <?php include('footer.php'); ?>

</body>
</html>
