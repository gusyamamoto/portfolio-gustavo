let scrollSpeed = 0;
let scrollPosition = 0;

function startMarquee() {
    const marqueeGroups = document.querySelectorAll('.marquee__group');
    scrollPosition -= scrollSpeed; // Update scroll position based on speed

    // Move each group based on the scroll position
    marqueeGroups.forEach(group => {
        group.style.transform = `translateX(${scrollPosition}px)`;
    });

    requestAnimationFrame(startMarquee); // Continue the animation
}

window.addEventListener('scroll', () => {
    // Calculate speed based on scroll position
    scrollSpeed = window.scrollY > 0 ? 2 : 0; // Adjust the speed as needed
});

// Start the marquee animation loop
startMarquee();
