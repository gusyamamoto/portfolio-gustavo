let scrollSpeed = 0;
let scrollPosition = 0;
let lastScrollY = window.scrollY; // Track the last scroll position
let animationFrameId; // To store the requestAnimationFrame ID

function startMarquee() {
    const marqueeGroups = document.querySelectorAll('.marquee__group');

    // Move each group based on the scroll position with smooth animation
    marqueeGroups.forEach(group => {
        group.style.transform = `translateX(${scrollPosition}px)`;
    });

    // Request the next animation frame
    animationFrameId = requestAnimationFrame(startMarquee); 
}

window.addEventListener('scroll', () => {
    const currentScrollY = window.scrollY;
    scrollSpeed = currentScrollY - lastScrollY; // Calculate the speed based on scroll direction

    // Update scroll position based on speed, and apply smoothing
    scrollPosition -= scrollSpeed * 0.3; // Adjust the multiplier for smoother effect

    lastScrollY = currentScrollY; // Update the last scroll position
});

// Start the marquee animation loop
startMarquee();
