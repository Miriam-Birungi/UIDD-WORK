<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Live Scores | SportsHub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="stylesheet" href="live-scores.css" />
    <link rel="stylesheet" href="footer.css">
</head>
<body>
    <!-- Updated Header -->
    <header class="navbar">
        <div class="container navbar-container">
            <!-- Logo -->
            <div class="navbar-brand">
                <span class="logo-sh">SH</span>
                <span class="logo-text">SportsHub</span>
            </div>

            <!-- Center Nav Links -->
            <nav class="navbar-links">
                <a href="dashboard.php">Home</a>
                <a href="live-scores.php" class="active">LiveScores</a>
                <a href="#">News</a>
                <a href="#">Fixtures</a>
                <a href="#">Standings</a>
            </nav>

            <!-- Right Side Actions -->
            <div class="navbar-actions">
                <div class="search-container">
                    <input type="text" class="search-input" placeholder="Search matches..." />
                    <button class="search-btn"><i class="fas fa-search"></i></button>
                </div>
                <a href="watch.html" class="watch-btn">Watch Sports</a>
                <a href="login.html" class="login-btn">Login</a>
                <button class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="live-scores-main">
        <div class="container">
            <!-- Page Header -->
            <header class="page-header">
                <h1 class="page-title">Live Scores</h1>
                <div class="sports-filter">
                    <button class="filter-btn active" data-sport="all">All Sports</button>
                    <button class="filter-btn" data-sport="football"><i class="fas fa-futbol"></i> Football</button>
                    <button class="filter-btn" data-sport="basketball"><i class="fas fa-basketball-ball"></i> Basketball</button>
                    <button class="filter-btn" data-sport="tennis"><i class="fas fa-table-tennis"></i> Tennis</button>
                    <button class="filter-btn" data-sport="hockey"><i class="fas fa-hockey-puck"></i> Hockey</button>
                </div>
            </header>

            <!-- Live Matches Section -->
            <section class="live-matches-section">
                <div class="section-header">
                    <h2 class="section-title">Currently Live</h2>
                    <div class="refresh-controls">
                        <span class="last-updated">Updated: <span id="update-time">Just now</span></span>
                        <button id="refresh-btn" class="refresh-btn">
                            <i class="fas fa-sync-alt"></i> Refresh
                        </button>
                    </div>
                </div>

                <div class="live-matches-container">
                    <div class="loading-spinner">
                        <div class="spinner"></div>
                        <p>Loading live matches...</p>
                    </div>
                </div>
            </section>

            <!-- Upcoming Matches Section -->
            <section class="upcoming-matches-section">
                <div class="section-header">
                    <h2 class="section-title">Upcoming Matches</h2>
                    <div class="date-selector">
                        <button class="date-btn prev-date"><i class="fas fa-chevron-left"></i></button>
                        <span class="current-date">Today, April 08</span>
                        <button class="date-btn next-date"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>

                <div class="upcoming-matches-container">
                    <!-- Match cards will be dynamically inserted here -->
                </div>
            </section>

            <!-- Completed Matches Section -->
            <section class="completed-matches-section">
                <div class="section-header">
                    <h2 class="section-title">Recent Results</h2>
                    <div class="league-selector">
                        <select id="league-select">
                            <option value="all">All Leagues</option>
                            <option value="premier-league">Premier League</option>
                            <option value="la-liga">La Liga</option>
                            <option value="nba">NBA</option>
                            <option value="wimbledon">Wimbledon</option>
                        </select>
                    </div>
                </div>

                <div class="completed-matches-container">
                    <!-- Match cards will be dynamically inserted here -->
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <?php include('footer.php'); ?>

    <script src="live-scores.js"></script>
</body>
</html>
