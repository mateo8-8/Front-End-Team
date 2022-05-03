<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Map</title>
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

        div {
            display: block;
            text-align: center;
            width: 100%;
        }
    </style>
</head>

<body>
    <ul id="nav">
        <li><strong><a class="active" href="https://313wildfire.com/Front-End-Team/api/Home/Home.php">Home</a></strong></li>
        <li><a href="https://313wildfire.com/Front-End-Team/api/OpenWeatherAPI.php">Open Weather API</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/api/Search.php">Search</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/api/Map.php">Map</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/api/Combo.php">Combo Chart</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/api/Gauge.php">Gauge Chart</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/api/Contact.php">Contact</a></li>
    </ul>

    <h2>Map</h2>

    <div>
        <iframe src="https://www.google.com/maps/d/embed?mid=1O_uBUObOuYCYeF8UDwLdnCFL7S1bzQjF&ehbc=2E312F" width="1000" height="600"></iframe>
    </div>
</body>

</html>