// Function to update Vancouver time
function updateVancouverTime() {
    const vancouverTimeElement = document.getElementById('vancouver-time');
    const options = { timeZone: 'America/Vancouver', timeStyle: 'medium', hourCycle: 'h12' };
    const timeString = new Intl.DateTimeFormat([], options).format(new Date());
    vancouverTimeElement.textContent = timeString;
}

// Function to fetch and display Vancouver weather (www.weatherapi.com)
async function getVancouverWeather() {
    const apiKey = '44a30f4a7aa24669a8c01354240110';
    const url = `https://api.weatherapi.com/v1/current.json?key=${apiKey}&q=Vancouver`;

    try {
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const weatherData = await response.json();
        const weatherElement = document.getElementById('vancouver-weather');
        
        if (weatherData && weatherData.current) {
            const temperature = weatherData.current.temp_c; // Temperature in Celsius
            const description = weatherData.current.condition.text; // Weather condition
            weatherElement.textContent = `The temperature is ${temperature}°C with ${description}.`;
        } else {
            weatherElement.textContent = 'Weather information not available.';
        }
    } catch (error) {
        console.error('Error fetching weather data:', error);
        const weatherElement = document.getElementById('vancouver-weather');
        weatherElement.textContent = 'Weather information not available.';
    }
}

document.addEventListener("DOMContentLoaded", function() {
    setInterval(updateVancouverTime, 1000);
    getVancouverWeather();
});
