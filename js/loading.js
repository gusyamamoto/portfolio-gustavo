document.addEventListener("DOMContentLoaded", () => {
    const loadingScreen = document.getElementById('loading');
    const mainContent = document.getElementById('primary');

    setTimeout(() => {
        loadingScreen.style.display = "none";
        mainContent.style.display = "block";
    }, 1800);
});
