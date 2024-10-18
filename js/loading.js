document.addEventListener("DOMContentLoaded", () => {
    const loadingScreen = document.getElementById('loading');
    const mainContent = document.getElementById('primary'); // Updated to match the correct ID

    // Trigger the fade-out effect for the loading screen
    // loadingScreen.classList.add("fade-out");

    // Wait for the fade-out transition (2s) to complete before hiding the loading screen
    setTimeout(() => {
        loadingScreen.style.display = "none"; // Hide the loading screen after fade-out
        mainContent.style.display = "block"; // Show main content
    }, 1800); // Adjusted to 2 seconds to match the CSS transition time
});
