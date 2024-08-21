window.onload = function() {
    var circle = document.getElementById('circle');
    var lastMouseMoveEvent = null;
    var animationFrame = null;

    // Debounce the mousemove event
    window.onmousemove = function(e) {
        lastMouseMoveEvent = e;
        if (!animationFrame) {
            animationFrame = requestAnimationFrame(function() {
                circle.style.top = lastMouseMoveEvent.clientY + 'px';
                circle.style.left = lastMouseMoveEvent.clientX + 'px';
                animationFrame = null;
            });
        }
    };

    // Add hover effect for growing the cursor
    document.querySelectorAll("a, #logo, .portfolio-image img, button").forEach(element => {
        element.addEventListener("mouseenter", () => {
            circle.classList.add("bigger");
        });

        element.addEventListener("mouseleave", () => {
            circle.classList.remove("bigger");
        });
    });

    // Scroll Animation
    const elementsToAnimate = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right');

    function handleScroll() {
        elementsToAnimate.forEach(element => {
            const rect = element.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom >= 0) {
                element.classList.add('visible');
            }
        });
    }

    // Trigger handleScroll on scroll and on page load
    window.addEventListener('scroll', handleScroll);
    handleScroll();  // For elements already in view on load
};
