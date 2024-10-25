function copyEmail() {
    const email = 'gustavoyamamoto@gmail.com';
    navigator.clipboard.writeText(email)
        .then(() => {
            const button = document.getElementById('copy-email-button');
            button.textContent = 'Copied!';
            button.classList.add('copied');

            setTimeout(() => {
                button.textContent = 'Copy E-mail';
                button.classList.remove('copied');
            }, 4000);
        })
        .catch(err => {
            console.error('Could not copy email: ', err);
        });
}

document.getElementById('copy-email-button').addEventListener('click', copyEmail);
