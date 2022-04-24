<?php
include "database.php";
session_start();


// Check user login or not
//if (!isset($_SESSION['uname'])) {
//    header('Location: index.php');
//}

// logout
//if (isset($_POST['but_logout'])) {
//    session_destroy();
//    header('Location: login.php');
//}

// Notification
echo '<script type="text/javascript">
var notificationsEnabled = false;

function initNotifications() {
    if (window.Notification) {
        Notification.requestPermission(function(permission) {
            if (permission === \'granted\') {
                notificationsEnabled = true;
            } else {
                alert("You denied Notifications, its so sad");
            }
        });
    } else {
        alert("Your browser doesn\'t support Notifications API");
    }
}

function showNotification() {
    if (notificationsEnabled) {
        var notification = new Notification("Wildfire Detection", {
            body : \'Your node is offline\',
        });
        
        setTimeout(function() { notification.close(); }, 5000);
        console.log("Worked");
    } else {
        alert("Notifications are disabled");
    }
}
</script>'


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>
    <style>
        #nav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        #nav li {
            float: left;
        }

        #nav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        #nav li a:hover {
            background-color: #111;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .right {
            width: auto;
            height: 450px;
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

        .left {
            flex: 15%;
            padding-left: 20px;
            padding-bottom: 20px;
        }

        .right {
            flex: 65%;
            padding: 15px;
        }

        #name {
            width: auto;
            height: 45px;
            background-color: #ddd;
            text-align: center;
        }
    </style>
</head>

<body onload="initNotifications()">
    <ul id="nav">
        <li><a class="active" href="https://313wildfire.com/Front-End-Team/api/Home.php">Home</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/pages/About.html">About</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/api/OpenWeatherAPI.php">Open Weather API</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/api/Search.php">Search</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/pages/Map.html">Map</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/pages/Chart.html">Chart</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/pages/Contact.html">Contact</a></li>
    </ul>

    <div class="right">
        <div class="center">
            <h2>Subscribe To Our Alarm System</h2>
            <p>If you wish to get notification through email when the fire level went over the risk factor.</p>
            <p>Please enter your email address in the textbox.</p>

            <?php include 'Email.php' ?>
            <button onclick="showNotification()">Show Notification</button>
        </div>
    </div>

    <!-- <div class="right" style="background-color:#ddd;">
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
    </script> -->
</body>

</html>

<!-- <!doctype html>
<html>

<head></head>

<body onload="initNotifications()">
    <ul id="nav">
        <li><a class="active" href="Home.html">Home</a></li>
        <li><a href="About.html">About</a></li>
        <li><a href="Search.html">Search</a></li>
        <li><a href="Map.html">Map</a></li>
        <li><a href="Chart.html">Chart</a></li>
        <li><a href="Contact.html">Contact</a></li>
        <li><a href="Login.html">Login</a></li>
    </ul>

    <h2>Home</h2>

    <h1>Homepage</h1>
    <form method='post' action="">
        <input type="submit" value="Logout" name="but_logout">
    </form>
    <button onclick="showNotification()">Show Notification</button>
</body>

</html> -->