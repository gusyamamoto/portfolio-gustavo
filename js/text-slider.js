// let scrollSpeed = 0;
// let scrollPosition = 0;
// let lastScrollY = window.scrollY; // Track the last scroll position
// let animationFrameId; // To store the requestAnimationFrame ID

// function startMarquee() {
//     const marqueeGroups = document.querySelectorAll('.marquee__group');

//     // Move each group based on the scroll position with smooth animation
//     marqueeGroups.forEach(group => {
//         group.style.transform = `translateX(${scrollPosition}px)`;
//     });

//     // Request the next animation frame
//     animationFrameId = requestAnimationFrame(startMarquee); 
// }

// window.addEventListener('scroll', () => {
//     const currentScrollY = window.scrollY;
//     scrollSpeed = currentScrollY - lastScrollY; // Calculate the speed based on scroll direction

//     // Update scroll position based on speed, and apply smoothing
//     scrollPosition -= scrollSpeed * 0.3; // Adjust the multiplier for smoother effect

//     lastScrollY = currentScrollY; // Update the last scroll position
// });

// // Start the marquee animation loop
// startMarquee();




// let lastScrollY = window.scrollY; // Store the last scroll position
// let rotation = 0; // Keep track of the current rotation
// let isScrolling = false; // Flag to check if scrolling is happening

// function rotateSVG() {
//     const svgElement = document.querySelector('.spinning-svg');

//     if (!svgElement) return;

//     // Calculate scroll direction and update the rotation
//     const currentScrollY = window.scrollY;
//     const scrollDifference = currentScrollY - lastScrollY;

//     // Adjust rotation based on scroll direction
//     rotation += scrollDifference * 0.5; // Adjust multiplier for faster/slower rotation
//     svgElement.style.transform = `rotate(${rotation}deg)`;

//     lastScrollY = currentScrollY;

//     // Set a timeout to stop rotating if the user stops scrolling
//     if (isScrolling) {
//         clearTimeout(isScrolling);
//     }
//     isScrolling = setTimeout(() => {
//         svgElement.style.transition = 'transform 0.3s ease-out';
//         isScrolling = false;
//     }, 100);
// }

// // Add event listener for scrolling
// window.addEventListener('scroll', () => {
//     const svgElement = document.querySelector('.spinning-svg');
//     if (svgElement) {
//         svgElement.style.transition = 'transform 0.1s ease'; // Reset transition for smooth rotation while scrolling
//     }
//     rotateSVG();
// });
