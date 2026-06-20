document.addEventListener('DOMContentLoaded', function() {
    // Dynamic sticky header on scroll
    const header = document.querySelector('header');
    const body = document.body;
    let stickyThreshold = 120;
    
    if (header) {
        stickyThreshold = header.offsetHeight - 50;
    }

    window.addEventListener('scroll', function() {
        if (window.scrollY > stickyThreshold) {
            body.classList.add('navbar-sticky');
        } else {
            body.classList.remove('navbar-sticky');
        }
    });

    // Handle scroll-to-top smooth behavior
    const topScrollBtn = document.querySelector('.dmtop');
    if (topScrollBtn) {
        topScrollBtn.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // Add CSS animations to cards on hover or scroll
    const newsCards = document.querySelectorAll('.colormag-news-card');
    newsCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-6px)';
        });
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'none';
        });
    });
});
