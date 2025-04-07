document.addEventListener('DOMContentLoaded', function() {
    // DOM Elements
    const liveMatchesContainer = document.querySelector('.live-matches-container');
    const upcomingMatchesContainer = document.querySelector('.upcoming-matches-container');
    const completedMatchesContainer = document.querySelector('.completed-matches-container');
    const refreshBtn = document.getElementById('refresh-btn');
    const updateTimeEl = document.getElementById('update-time');
    const sportsFilter = document.querySelector('.sports-filter');
    const leagueSelect = document.getElementById('league-select');
    
    // Sample data - in a real app, this would come from an API
    const matches = {
        live: [
            {
                id: 1,
                sport: 'football',
                competition: 'Premier League',
                status: 'live',
                minute: '64\'',
                homeTeam: { name: 'Manchester United', logo: 'assets/images/teams/manutd.png', score: 2 },
                awayTeam: { name: 'Liverpool', logo: 'assets/images/teams/liverpool.png', score: 1 }
            },
            {
                id: 2,
                sport: 'basketball',
                competition: 'NBA',
                status: 'live',
                period: 'Q3 7:32',
                homeTeam: { name: 'LA Lakers', logo: 'assets/images/teams/lakers.png', score: 78 },
                awayTeam: { name: 'Golden State', logo: 'assets/images/teams/warriors.png', score: 82 }
            }
        ],
        upcoming: [
            {
                id: 3,
                sport: 'tennis',
                competition: 'Wimbledon',
                status: 'upcoming',
                time: '14:30',
                homeTeam: { name: 'R. Nadal', logo: 'assets/images/teams/nadal.png' },
                awayTeam: { name: 'N. Djokovic', logo: 'assets/images/teams/djokovic.png' }
            },
            {
                id: 4,
                sport: 'football',
                competition: 'La Liga',
                status: 'upcoming',
                time: '20:45',
                homeTeam: { name: 'Barcelona', logo: 'assets/images/teams/barcelona.png' },
                awayTeam: { name: 'Real Madrid', logo: 'assets/images/teams/realmadrid.png' }
            }
        ],
        completed: [
            {
                id: 5,
                sport: 'hockey',
                competition: 'NHL',
                status: 'completed',
                homeTeam: { name: 'Toronto', logo: 'assets/images/teams/toronto.png', score: 3 },
                awayTeam: { name: 'Montreal', logo: 'assets/images/teams/montreal.png', score: 1 }
            },
            {
                id: 6,
                sport: 'football',
                competition: 'Premier League',
                status: 'completed',
                homeTeam: { name: 'Chelsea', logo: 'assets/images/teams/chelsea.png', score: 0 },
                awayTeam: { name: 'Arsenal', logo: 'assets/images/teams/arsenal.png', score: 2 }
            }
        ]
    };

    // Initialize the page
    renderMatches();
    setupEventListeners();

    function renderMatches() {
        renderLiveMatches();
        renderUpcomingMatches();
        renderCompletedMatches();
        updateTimestamp();
    }

    function renderLiveMatches() {
        liveMatchesContainer.innerHTML = '';
        
        const liveMatches = matches.live;
        if (liveMatches.length === 0) {
            liveMatchesContainer.innerHTML = `
                <div class="no-matches">
                    <i class="far fa-frown"></i>
                    <p>No live matches at the moment</p>
                </div>
            `;
            return;
        }

        liveMatches.forEach(match => {
            liveMatchesContainer.appendChild(createMatchCard(match));
        });
    }

    function renderUpcomingMatches() {
        upcomingMatchesContainer.innerHTML = '';
        
        matches.upcoming.forEach(match => {
            upcomingMatchesContainer.appendChild(createMatchCard(match));
        });
    }

    function renderCompletedMatches() {
        completedMatchesContainer.innerHTML = '';
        
        matches.completed.forEach(match => {
            completedMatchesContainer.appendChild(createMatchCard(match));
        });
    }

    function createMatchCard(match) {
        const card = document.createElement('div');
        card.className = 'match-card';
        
        let statusText = '';
        if (match.status === 'live') {
            statusText = match.minute || match.period || 'LIVE';
        } else if (match.status === 'upcoming') {
            statusText = match.time;
        } else {
            statusText = 'FT';
        }

        card.innerHTML = `
            <div class="match-header">
                <span class="match-competition">${match.competition}</span>
                <span class="match-status ${match.status}">${statusText}</span>
            </div>
            <div class="match-content">
                <div class="teams">
                    <div class="team">
                        <img src="${match.homeTeam.logo}" alt="${match.homeTeam.name}" class="team-logo">
                        <span class="team-name">${match.homeTeam.name}</span>
                        ${match.homeTeam.score !== undefined ? `<span class="team-score">${match.homeTeam.score}</span>` : ''}
                    </div>
                    <div class="team">
                        <img src="${match.awayTeam.logo}" alt="${match.awayTeam.name}" class="team-logo">
                        <span class="team-name">${match.awayTeam.name}</span>
                        ${match.awayTeam.score !== undefined ? `<span class="team-score">${match.awayTeam.score}</span>` : ''}
                    </div>
                </div>
                ${match.status === 'upcoming' ? `<div class="match-time upcoming">Starts at ${match.time}</div>` : ''}
            </div>
            <div class="match-actions">
                <div class="match-action">
                    <i class="far fa-star"></i> Follow
                </div>
                <div class="match-action">
                    <i class="far fa-chart-bar"></i> Stats
                </div>
                ${match.status === 'live' ? `
                <div class="match-action">
                    <i class="fas fa-play"></i> Watch
                </div>
                ` : ''}
            </div>
        `;
        
        return card;
    }

    function updateTimestamp() {
        const now = new Date();
        updateTimeEl.textContent = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
    }

    function setupEventListeners() {
        // Refresh button
        refreshBtn.addEventListener('click', function() {
            this.classList.add('refreshing');
            setTimeout(() => {
                renderMatches();
                this.classList.remove('refreshing');
            }, 1000);
        });

        // Sports filter
        sportsFilter.addEventListener('click', function(e) {
            if (e.target.classList.contains('filter-btn')) {
                document.querySelectorAll('.filter-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                e.target.classList.add('active');
                // In a real app, filter matches by sport
            }
        });

        // League selector
        leagueSelect.addEventListener('change', function() {
            // In a real app, filter completed matches by league
        });
    }
});