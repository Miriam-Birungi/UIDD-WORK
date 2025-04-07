<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // Check for remember me cookie
    if (isset($_COOKIE['remember_me'])) {
        checkRememberMe();
    } else {
        header("Location: login.html");
        exit();
    }
}

function checkRememberMe() {
    // Your remember me validation logic here
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportsHub | Dashboard</title>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="navbar-container">
            <div class="navbar-brand">
                <span class="logo-sh">SH</span>
                <span class="logo-text">SportsHub</span>
            </div>

            <div class="navbar-links">
                <a href="#" class="active">Home</a>
                <a href="live-scores.html">LiveScores</a>
                <a href="shop.html">Shop</a>
                <div class="search-container">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </div>
            </div>

            <div class="navbar-actions">
                <a href="watch.html" class="watch-btn">Watch Sports</a>
                <a href="login.html" class="login-btn">Logout</a>
            </div>

            <button class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Experience Sports Like Never Before</h1>
            <p>Your ultimate destination for live scores, news, and sports entertainment</p>
            <div class="hero-buttons">
                <a href="premium.html" class="btn-primary">Get Premium</a>
                <a href="live-scores.html" class="btn-secondary">Live Scores</a>
            </div>
        </div>
    </section>

    <!-- Featured Content -->
    <section class="featured">
        <div class="section-header">
            <h2>Featured Content</h2>
            <a href="#" class="view-all">View All</a>
        </div>

        <div class="featured-grid">
            <div class="featured-item">
                <div class="video-container">
                    <video poster="assets/images/video1-thumb.jpg" controls>
                        <source src="assets/videos/featured1.mp4" type="video/mp4">
                    </video>
                    <div class="video-overlay">Spark</div>
                </div>
                <h3>Championship Highlights</h3>
            </div>

            <div class="featured-item">
                <div class="video-container">
                    <video poster="assets/images/video2-thumb.jpg" controls>
                        <source src="assets/videos/featured2.mp4" type="video/mp4">
                    </video>
                    <div class="video-overlay">Spark</div>
                </div>
                <h3>Player of the Month</h3>
            </div>
        </div>
    </section>

    <!-- Live Games Section -->
    <section class="live-games">
        <div class="section-header">
            <h2>Live Games</h2>
            <a href="live-scores.html" class="view-all">View All</a>
        </div>

        <div class="games-table">
            <div class="table-header">
                <div class="col-title">Title</div>
                <div class="col-sport">Sport</div>
                <div class="col-time">Time</div>
                <div class="col-action">Watch</div>
            </div>

            <div class="table-row">
                <div class="col-title">Manchester United vs Liverpool</div>
                <div class="col-sport">Football</div>
                <div class="col-time">Live 35'</div>
                <div class="col-action"><a href="#" class="watch-link">Watch Now</a></div>
            </div>

            <div class="table-row">
                <div class="col-title">Lakers vs Warriors</div>
                <div class="col-sport">Basketball</div>
                <div class="col-time">Live Q3</div>
                <div class="col-action"><a href="#" class="watch-link">Watch Now</a></div>
            </div>

            <div class="table-row">
                <div class="col-title">Nadal vs Djokovic</div>
                <div class="col-sport">Tennis</div>
                <div class="col-time">Live Set 2</div>
                <div class="col-action"><a href="#" class="watch-link">Watch Now</a></div>
            </div>
        </div>

        <div class="more-sports">
            <a href="sports.html" class="btn-outline">More Sports <i class="fas fa-chevron-right"></i></a>
        </div>
    </section>

    <!-- Latest News Section -->
    <section class="latest-news">
        <div class="section-header">
            <h2>Latest News</h2>
            <a href="news.html" class="view-all">View All</a>
        </div>

        <div class="news-grid">
            <div class="news-card">
                <div class="news-image" style="background-image: url('assets/images/news1.jpg');">
                    <div class="news-tag">Spark</div>
                </div>
                <div class="news-content">
                    <h3>Team Announces New Signing</h3>
                    <p class="news-date">2 hours ago</p>
                    <p class="news-excerpt">The club has confirmed the signing of the young talent from...</p>
                    <a href="news-detail.html" class="read-more">Read More</a>
                </div>
            </div>

            <div class="news-card">
                <div class="news-image" style="background-image: url('assets/images/news2.jpg');">
                    <div class="news-tag">Spark</div>
                </div>
                <div class="news-content">
                    <h3>Championship Preview</h3>
                    <p class="news-date">5 hours ago</p>
                    <p class="news-excerpt">Everything you need to know about the upcoming championship matches...</p>
                    <a href="news-detail.html" class="read-more">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include('footer.php'); ?>

    <script src="dashboard.js"></script>
    
</body>

</html>