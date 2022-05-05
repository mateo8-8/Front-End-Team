<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Search</title>

    <script src="https://313wildfire.com/Front-End-Team/api/Search/Search.js"></script>
    <link rel="stylesheet" href="https://313wildfire.com/Front-End-Team/api/Search/Search.css">
</head>

<body id="grad">
    <ul id="nav">
        <li><strong><a class="active" href="https://313wildfire.com/Front-End-Team/api/Home/Home.php">Home</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/OWAPI/OpenWeatherAPI.php">Open Weather API</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Search/Search.php">Search</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Map/Map.php">Map</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Combo/Combo.php">Combo Chart</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Gauge/Gauge.php">Gauge Chart</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Contact/Contact.php">Contact</a></strong></li>
    </ul>

    <h2>Search</h2>

    <div class="row">
        <div class="left">
            <h2>Location</h2>
            <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search...">

            <ul id="myMenu">
                <li><a href="#" onclick=LA()>Los Angeles</a></li>
                <li><a href="#" onclick=SD()>San Diego</a></li>
                <li><a href="#" onclick=SJ()>San Jose</a></li>
                <li><a href="#" onclick=SF()>San Francisco</a></li>
                <li><a href="#" onclick=Fresno()>Fresno</a></li>
                <li><a href="#" onclick=Sacramento()>Sacramento</a></li>
                <li><a href="#" onclick=LB()>Long Beach</a></li>
                <li><a href="#" onclick=Oakland()>Oakland</a></li>
                <li><a href="#" onclick=Bakersfield()>Bakersfield</a></li>
                <li><a href="#" onclick=Anaheim()>Anaheim</a></li>
            </ul>
        </div>

        <div class="right">
            <h2 id="SNI">Sensor Nodes Information</h2>

            <div id="locationbox">
                <label for="location">Location: </label>
                <input type="text" id="location" name="location">
            </div>

            <div id="longitudebox">
                <label for="longitude">Longitude: </label>
                <input type="text" id="longitude" name="longitude">
            </div>

            <div id="latitudebox">
                <label for="latitude">Latitude: </label>
                <input type="text" id="latitude" name="latitude">
            </div>

            <div id="temperaturebox">
                <label>Temperature: </label>
                <input type="text" id="temperature" name="temperature">
            </div>

            <div id="humiditybox">
                <label>Humidity: </label>
                <input type="text" id="humidity" name="humidity">
            </div>

            <div id="pressurebox">
                <label>Pressure: </label>
                <input type="text" id="pressure" name="pressure">
            </div>

            <div id="windbox">
                <label>Wind: </label>
                <input type="text" id="wind" name="wind">
            </div>

            <div id="firebox">
                <label>Fire Probability: </label>
                <input type="text" id="fire" name="fire">
            </div>
        </div>
</body>

</html>