<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Open Weather API</title>
    <style>
        #grad {
            background-color: red;
            background-image: linear-gradient(yellow, red);
            font-family: Arial, Helvetica, sans-serif;
            background-repeat: no-repeat;
            background-size: cover;
            background-color: red;
            background-image: linear-gradient(yellow, red);
            font-family: Arial, Helvetica, sans-serif;
            height: 100%;
        }

        #nav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #EB0A0A;
        }

        #nav li {
            float: left;
        }

        #nav li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        #nav li a:hover {
            background-color: white;
        }

        .center {
            text-align: center;
            padding-top: 20px;
        }

        label {
            display: inline-block;
            text-align: left;
            width: 100px;
            vertical-align: top;
        }

        #city {
            text-align: center;
            height: 2px;
            padding: 10px;
        }

        input {
            text-align: center;
        }

        .right {
            flex: 65%;
            padding: 15px;
        }

        #name {
            width: auto;
            height: 45px;
            text-align: center;
        }
    </style>
</head>

<body id="grad">
    <ul id="nav">
        <li><strong><a class="active" href="https://313wildfire.com/Front-End-Team/api/Home/Home.php">Home</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/OWAPI/OpenWeatherAPI.php">Open Weather API</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Search.php">Search</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Map.php">Map</a></strong></li>
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

    <script>
        document.getElementById("submit").addEventListener('click', function(name) {
            fetch('https://api.openweathermap.org/data/2.5/weather?q=' + document.getElementById("city").value + '&appid=97f22a67241a67289efed587f6be89d3')
                .then(response => response.json())
                .then(data => {
                    document.getElementById("name").innerHTML = data['name']
                    document.getElementById("longitude").value = data['coord']['lon']
                    document.getElementById("latitude").value = data['coord']['lat']
                    document.getElementById("temperature").value = data['main']['temp'] + " F"
                    document.getElementById("humidity").value = data['main']['humidity'] + " %"
                    document.getElementById("pressure").value = data['main']['pressure'] + " hPa"
                    document.getElementById("weather").value = data['weather'][0]['description']
                    document.getElementById("wind").value = data['wind']['speed'] + " m/s"
                    document.getElementById("city").value = ""
                })
                .catch(err => alert("Wrong City Name! Try Again!"));
        })
    </script>
</body>

</html>