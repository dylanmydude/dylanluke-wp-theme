document.addEventListener('DOMContentLoaded', function() {
    const elements = document.querySelectorAll('.fade-in-on-scroll');
    
    function checkPosition() {
        elements.forEach(function(element) {
            const position = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.2;
            if (position < screenPosition) {
                element.classList.add('visible');
            }
        });
    }

    // Debounce function to improve performance
    function debounce(func, wait = 20, immediate = true) {
        let timeout;
        return function() {
            const context = this, args = arguments;
            const later = function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            const callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    }

    // Apply debounce to the scroll event listener
    window.addEventListener('scroll', debounce(checkPosition, 20));
    
    // Initial check to show elements already in view on load
    checkPosition();
});
