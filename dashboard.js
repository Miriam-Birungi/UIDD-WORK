document.addEventListener('DOMContentLoaded', function() {
        // Mobile menu toggle
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navbarLinks = document.querySelector('.navbar-links');
        const navbarActions = document.querySelector('.navbar-actions');
    
        if (mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', function() {
                navbarLinks.style.display = navbarLinks.style.display === 'flex' ? 'none' : 'flex';
                navbarActions.style.display = navbarActions.style.display === 'flex' ? 'none' : 'flex';
            });
        }
    
        // Video play on hover
        const videoContainers = document.querySelectorAll('.video-container');
    
        videoContainers.forEach(container => {
            const video = container.querySelector('video');
    
            container.addEventListener('mouseenter', function() {
                if (video) {
                    video.play().catch(e => console.log('Autoplay prevented:', e));
                }
            });
    
            container.addEventListener('mouseleave', function() {
                if (video) {
                    video.pause();
                    video.currentTime = 0;
                }
            });
        });
    
        // Live game countdown timers (example)
        const liveTimes = document.querySelectorAll('.col-time');
    
        liveTimes.forEach(timeElement => {
            if (timeElement.textContent.includes("Live")) {
                setInterval(() => {
                    const currentText = timeElement.textContent;
                    const parts = currentText.split(' ');
                    if (parts.length > 1) {
                        const timePart = parts[1];
                        if (timePart.includes("'")) {
                            const minutes = parseInt(timePart.replace("'", ""));
                            if (!isNaN(minutes)) {
                                timeElement.textContent = `Live ${minutes + 1}'`;
                            }
                        } else if (timePart.includes("Q")) {
                            const quarter = parseInt(timePart.replace("Q", ""));
                            if (quarter < 4 && Math.random() > 0.9) {
                                timeElement.textContent = `Live Q${quarter + 1}`;
                            }
                        } else if (timePart.includes("Set")) {
                            const set = parseInt(timePart.replace("Set ", ""));
                            if (set < 5 && Math.random() > 0.9) {
                                timeElement.textContent = `Live Set ${set + 1}`;
                            }
                        }
                    }
                }, 60000); // Update every minute
            }
        });
    
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    
        // 🔍 Live Game Search Filter
        const searchInput = document.getElementById('searchInput');
        const gameRows = document.querySelectorAll('.games-table .table-row');
    
        if (searchInput) {
            searchInput.addEventListener('keyup', function () {
                const query = searchInput.value.toLowerCase();
    
                gameRows.forEach(row => {
                    const rowText = row.textContent.toLowerCase();
                    if (rowText.includes(query)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        }
    });
    