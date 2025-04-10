<!-- dashboard.php -->
<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    if (isset($_COOKIE['remember_me'])) {
        checkRememberMe();
    } else {
        header("Location: login.html");
        exit();
    }
}

function checkRememberMe() {
    // Validate remember me cookie here
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | SportsHub</title>
    <link rel="stylesheet" href="dashboard-header.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Dashboard Header -->
    <nav class="navbar navbar-dashboard">
        <div class="navbar-container">
            <div class="navbar-brand">
                <span class="logo-sh">SH</span>
                <span class="logo-text">SportsHub</span>
            </div>

            <div class="navbar-links">
                <a href="dashboard.php">Dashboard</a>
                <a href="live-scores.php">LiveScores</a>
            </div>

            <div class="navbar-search">
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-search"></i></button>
            </div>

            <div class="navbar-user">
                <span>Welcome, <?php echo $_SESSION['username'] ?? 'User'; ?></span>
                <a href="profile.php"><i class="fas fa-user-circle"></i></a>
                <a href="logout.php" class="logout-btn">Log Out</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Experience Sports Like Never Before</h1>
            <p>Your ultimate destination for live scores, news, and sports entertainment</p>
            <div class="hero-buttons">
                <a href="live-scores.php" class="btn-secondary">Live Scores</a>
            </div>
        </div>
    </section>

    <!-- Featured Content Section -->
    <section class="featured">
        <div class="section-header">
            <h2>Featured Content</h2>
        </div>

        <div class="featured-grid">
            <div class="featured-item">
                <div class="image-container">
                    <img src="arsenal.webp" alt="Player of the Month">
                    <div class="image-overlay">Spark</div>
                </div>
                <h3>Champions League highlights with Declan Rice</h3>
            </div>

            <div class="featured-item">
                <div class="image-container">
                    <img src="PL2425-SHEARERS-TOTW_LEAD-12.webp" alt="Team of the Week">
                    <div class="image-overlay">Spark</div>
                </div>
                <h3><a href="Team of the Week.php" class="btn-secondary">Team of the Week</a></h3>
            </div>
        </div>
    </section>

    <!-- Live Games Section -->
    <section class="live-games">
        <div class="section-header">
            <h2>Live Games</h2>
            <a href="live-scores.php" class="view-all">View All</a>
        </div>

        <div class="games-table">
            <div class="table-header">
                <div class="col-title">Title</div>
                <div class="col-sport">Sport</div>
                <div class="col-time">Time</div>
                <div class="col-action">Watch</div>
            </div>
            <div class="table-row">
                <div class="col-title">Paris Saint-Germain vs Aston Villa</div>
                <div class="col-sport">Football</div>
                <div class="col-time">Live</div>
                <div class="col-action"><a href="#" class="watch-link">Watch Now</a></div>
            </div>
            <div class="table-row">
                <div class="col-title">Barcelona vs Borussia Dortmund</div>
                <div class="col-sport">Football</div>
                <div class="col-time">Live</div>
                <div class="col-action"><a href="#" class="watch-link">Watch Now</a></div>
            </div>
        </div>

        <div class="more-sports">
            <a href="sports.php" class="btn-outline">More Sports <i class="fas fa-chevron-right"></i></a>
        </div>
    </section>

     <!-- Latest News Section -->
     <section class="latest-news">
        <div class="section-header">
            <h2>Latest News</h2>
        </div>

        <div class="news-grid">
            <div class="news-card">
            <img src="arsenal3.jpg" alt="highlights" class="featured-image">
                    <div class="news-tag">Spark</div>
                </div>
                
                <div class="latest-news-container">
                    <article class="news-item">
                        <h3 class="news-title">Champions League Quarter-Finals Kick Off</h3>
                        <p class="news-summary">The Champions League 2025 enters its quarter-final phase with matches scheduled for April 8, 9, 15, and 16. Notable clashes include Arsenal vs Real Madrid, Bayern vs Inter, Barcelona vs Borussia Dortmund, and PSG vs Aston Villa. The first leg of these ties is underway, with teams vying for a spot in the semi-finals.</p>
                    </article>
                    <article class="news-item">
                        <h3 class="news-title">Arsenal stun Real Madrid in Champions League with Declan Rice double</h3>
                        <p class="news-summary">
                        Arsenal midfielder Declan Rice nets two free kicks in shock 3-0 quarterfinal first-leg win against defending champions. </p>
                    </article>
                    
                    <article class="news-item">
                        <h3 class="news-title">Bayern 1-2 Inter:</h3>
                        <p class="news-summary">
                        Davide Frattesi's 88th-minute strike gave visitors Inter a 2-1 advantage in their quarter-final against Bayern.</p>
                    </article>
                   
                    <article class="news-item">
                        <h3 class="news-title"> Paris Saint-Germain vs Aston Villa:</h3>
                        <p class="news-summary">
                        Paris Saint-Germain boss Luis Enrique has no issues with Marco Asensio facing his parent club in the Champions League quarter-final first leg with Aston Villa.

The Spain playmaker joined Villa on loan until the end of the season in the January transfer window and has proved a big hit, scoring eight goals in 11 games.

UEFA rules state that loan players can play against their parent clubs in European competition, but Enrique is relaxed at the prospect of coming up against his player in Wednesday's first leg in the French capital.
"It doesn't bother me at all," Enrique, whose side were crowned Ligue 1 champions at the weekend, said at a press conference. 

"I'm delighted that Marco Asensio can play.

"He hasn't had any game time here, so he had the option of going to Birmingham. It's good that he's playing.

"I shared a lot with him in the national team. I had the opportunity to have him during a World Cup. He is a very important player for me.

"He was important during last season, but also at the beginning of this season.

"He is a very high-class player. He was important at the start of the season and I know him perfectly well."
</p>
<h3>Paris Saint-Germain vs Aston Villa. UEFA Champions League Quarter Final.
8:00pm, Wednesday 9th April 2025.


Parc des Princes.


Paris Saint-Germain

Aston Villa</h3>
                    </article>
                </div>
                </div>
            </div>
    </div>
    </section>

    <!-- Footer -->
    <?php include('footer.php'); ?>

    <script src="dashboard.js"></script>
</body>
</html>
