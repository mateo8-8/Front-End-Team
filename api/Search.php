<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Search</title>
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

        * {
            box-sizing: border-box;
        }

        .row {
            display: flex;
        }

        .left {
            flex: 15%;
            padding: 15px 0;
        }

        .left h2 {
            padding-left: 8px;
        }

        .right {
            flex: 65%;
            padding: 15px;
        }

        #mySearch {
            width: 100%;
            font-size: 18px;
            padding: 11px;
            border: 1px solid #ddd;
        }

        #myMenu {
            list-style-type: none;
            padding: 0;
            margin: 0;
            width: auto;
            height: 300px;
            overflow: auto;
        }

        #myMenu li a {
            padding: 12px;
            text-decoration: none;
            color: black;
            display: block
        }

        #myMenu li a:hover {
            background-color: #eee;
        }

        #locationbox,
        #longitudebox,
        #latitudebox,
        #temperaturebox,
        #humiditybox,
        #pressurebox,
        #windbox,
        #firebox {
            text-align: center;
            width: 100%;
            padding: 10px;
        }

        #SNI {
            text-align: center;
        }

        label {
            display: inline-block;
            text-align: left;
            width: 100px;
            vertical-align: top;
        }

        a {
            text-align: center;
        }
    </style>
</head>

<body>
    <ul id="nav">
        <li><a class="active" href="https://313wildfire.com/Front-End-Team/api/Home.php">Home</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/pages/About.html">About</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/api/Search.php">Search</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/pages/Map.html">Map</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/pages/Chart.html">Chart</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/pages/Contact.html">Contact</a></li>
    </ul>

    <h2>Search</h2>

    <div class="row">
        <div class="left" style="background-color:#bbb;">
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

        <div class="right" style="background-color:#ddd;">
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

        <script>
            function myFunction() {
                let input = document.getElementById("mySearch");
                let filter = input.value.toUpperCase();
                let ul = document.getElementById("myMenu");
                let li = ul.getElementsByTagName("li");

                for (i = 0; i < li.length; i++) {
                    a = li[i].getElementsByTagName("a")[0];
                    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        li[i].style.display = "";
                    } else {
                        li[i].style.display = "none";
                    }
                }
            }

            function LA() {
                document.getElementById('location').value = 'Los Angeles'
                document.getElementById('longitude').value = '-118.243683'
                document.getElementById('latitude').value = '34.052235'
                document.getElementById('temperature').value = '55°F'
                document.getElementById('humidity').value = '37%'
                document.getElementById('pressure').value = '1019 hPa'
                document.getElementById('wind').value = '5.14 m/s'
                document.getElementById('fire').value = '2 %'
            }

            function SD() {
                document.getElementById('location').value = 'San Diego'
                document.getElementById('longitude').value = '-117.161087'
                document.getElementById('latitude').value = '32.715736'
                document.getElementById('temperature').value = '55°F'
                document.getElementById('humidity').value = '70%'
                document.getElementById('pressure').value = '1019 hPa'
                document.getElementById('wind').value = '3.6 m/s'
                document.getElementById('fire').value = '1 %'
            }

            function SJ() {
                document.getElementById('location').value = 'San Jose'
                document.getElementById('longitude').value = '-121.893028'
                document.getElementById('latitude').value = '37.33548'
                document.getElementById('temperature').value = '46°F'
                document.getElementById('humidity').value = '70%'
                document.getElementById('pressure').value = '1025 hPa'
                document.getElementById('wind').value = '2.57 m/s'
                document.getElementById('fire').value = '0.9 %'
            }

            function SF() {
                document.getElementById('location').value = 'San Francisco'
                document.getElementById('longitude').value = '-122.446747'
                document.getElementById('latitude').value = '37.733795'
                document.getElementById('temperature').value = '47°F'
                document.getElementById('humidity').value = '75%'
                document.getElementById('pressure').value = '1025 hPa'
                document.getElementById('wind').value = '3.6 m/s'
                document.getElementById('fire').value = '0.75 %'
            }

            function Fresno() {
                document.getElementById('location').value = 'Fresno'
                document.getElementById('longitude').value = '-119.772591'
                document.getElementById('latitude').value = '36.746841'
                document.getElementById('temperature').value = '50°F'
                document.getElementById('humidity').value = '75%'
                document.getElementById('pressure').value = '1024 hPa'
                document.getElementById('wind').value = '4.63 m/s'
                document.getElementById('fire').value = '4 %'
            }

            function Sacramento() {
                document.getElementById('location').value = 'Sacramento'
                document.getElementById('longitude').value = '-121.478851'
                document.getElementById('latitude').value = '38.575764'
                document.getElementById('temperature').value = '56°F'
                document.getElementById('humidity').value = '47%'
                document.getElementById('pressure').value = '1025 hPa'
                document.getElementById('wind').value = '4.63 m/s'
                document.getElementById('fire').value = '2.3 %'
            }

            function LB() {
                document.getElementById('location').value = 'Long Beach'
                document.getElementById('longitude').value = '-118.193741'
                document.getElementById('latitude').value = '33.770050'
                document.getElementById('temperature').value = '65°F'
                document.getElementById('humidity').value = '29%'
                document.getElementById('pressure').value = '1020 hPa'
                document.getElementById('wind').value = '2.24 m/s'
                document.getElementById('fire').value = '3.7 %'
            }

            function Oakland() {
                document.getElementById('location').value = 'Oakland'
                document.getElementById('longitude').value = '-122.271111'
                document.getElementById('latitude').value = '37.804363'
                document.getElementById('temperature').value = '54°F'
                document.getElementById('humidity').value = '67%'
                document.getElementById('pressure').value = '1025 hPa'
                document.getElementById('wind').value = '3.09 m/s'
                document.getElementById('fire').value = '5.8 %'
            }

            function Bakersfield() {
                document.getElementById('location').value = 'Bakersfield'
                document.getElementById('longitude').value = '-119.018715'
                document.getElementById('latitude').value = '35.373291'
                document.getElementById('temperature').value = '54°F'
                document.getElementById('humidity').value = '47%'
                document.getElementById('pressure').value = '1023 hPa'
                document.getElementById('wind').value = '1.79 m/s'
                document.getElementById('fire').value = '0.04 %'
            }

            function Anaheim() {
                document.getElementById('location').value = 'Anaheim'
                document.getElementById('longitude').value = '-117.914299'
                document.getElementById('latitude').value = '33.836594'
                document.getElementById('temperature').value = '65°F'
                document.getElementById('humidity').value = '32%'
                document.getElementById('pressure').value = '1020 hPa'
                document.getElementById('wind').value = '5.14 m/s'
                document.getElementById('fire').value = '7.2 %'
            }
        </script>
</body>

</html>