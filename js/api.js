const apiKey = '44a30f4a7aa24669a8c01354240110';

async function getWeather(city, elementId) {
    const url = `https://api.weatherapi.com/v1/current.json?key=${apiKey}&q=${city}`;

    try {
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const weatherData = await response.json();
        const weatherElement = document.getElementById(elementId);

        if (weatherData && weatherData.current) {
            const temperature = weatherData.current.temp_c; // Temperature in Celsius
            const description = weatherData.current.condition.text; // Weather condition
            weatherElement.textContent = `In ${city} is ${temperature}°C, ${description}`;
        } else {
            weatherElement.textContent = 'Weather information not available.';
        }
    } catch (error) {
        console.error('Error fetching weather data:', error);
        const weatherElement = document.getElementById(elementId);
        weatherElement.textContent = 'Weather information not available.';
    }
}

// Fetch weather for Vancouver and São Paulo using the same function
getWeather('Vancouver', 'vancouver-weather');
getWeather('São Paulo', 'sao-paulo-weather');

