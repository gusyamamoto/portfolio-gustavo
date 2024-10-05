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


const entryTitle = document.querySelector('.entry-title');
const fadeStart = 0; // Start fading out at the top of the viewport
const fadeEnd = 200; // End fading out at 300px down the page (adjust as needed)

window.addEventListener('scroll', function () {
    const scrollY = window.scrollY;

    // Calculate the opacity based on scroll position
    if (scrollY >= fadeStart && scrollY <= fadeEnd) {
        const opacity = 1 - (scrollY - fadeStart) / (fadeEnd - fadeStart);
        entryTitle.style.opacity = opacity;
    } 
    // Fully hidden if beyond fadeEnd
    else if (scrollY > fadeEnd) {
        entryTitle.style.opacity = 0;
    } 
    // Fully visible if before fadeStart
    else {
        entryTitle.style.opacity = 1;
    }
});
