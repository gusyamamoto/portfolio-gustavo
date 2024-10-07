function copyEmail() {
    const email = 'gustavoyamamoto@gmail.com';
    navigator.clipboard.writeText(email)
        .then(() => {
            const button = document.getElementById('copy-email-button');
            button.textContent = 'Copied!';
            // Reset the button text after 2 seconds
            setTimeout(() => {
                button.textContent = 'Copy E-mail';
            }, 4000);
        })
        .catch(err => {
            console.error('Could not copy email: ', err);
        });
}

document.addEventListener("DOMContentLoaded", function() {
    setInterval(updateVancouverTime, 1000);
    getVancouverWeather();
});

document.getElementById('copy-email-button').addEventListener('click', copyEmail);
