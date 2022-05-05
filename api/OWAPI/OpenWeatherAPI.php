<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Open Weather API</title>

    <script src="https://313wildfire.com/Front-End-Team/api/OWAPI/OpenWeatherAPI.js"></script>
    <link rel="stylesheet" href="https://313wildfire.com/Front-End-Team/api/OWAPI/OpenWeatherAPI.css">
</head>

<body id="grad">
    <ul id="nav">
        <li><strong><a class="active" href="https://313wildfire.com/Front-End-Team/api/Home/Home.php">Home</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/OWAPI/OpenWeatherAPI.php">Open Weather API</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Search/Search.php">Search</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Map/Map.php">Map</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Combo.php">Combo Chart</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Gauge.php">Gauge Chart</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Contact.php">Contact</a></strong></li>
    </ul>

    <h2>Open Weather API</h2>

    <div class="right">
        <div class="center">
            <input type="text" placeholder="Enter The City" id="city">
            <button id="submit">Submit</button>

            <h1 id="name"></h1>

            <label for="longitude">Longitude: </label>
            <input type="text" id="longitude" name="longitude">
            <br><br>
            <label for="latitude">Latitude: </label>
            <input type="text" id="latitude" name="latitude">
            <br><br>
            <label for="temperature">Temperature: </label>
            <input type="text" id="temperature" name="temperature">
            <br><br>
            <label for="humidity">Humidity: </label>
            <input type="text" id="humidity" name="humidity">
            <br><br>
            <label for="pressure">Pressure: </label>
            <input type="text" id="pressure" name="pressure">
            <br><br>
            <label for="weather">Weather: </label>
            <input type="text" id="weather" name="weather">
            <br><br>
            <label for="wind">Wind: </label>
            <input type="text" id="wind" name="wind">
        </div>
    </div>
</body>

</html>