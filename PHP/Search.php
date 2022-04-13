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
        <li><a class="active" href="Home.html">Home</a></li>
        <li><a href="About.html">About</a></li>
        <li><a href="Search.html">Search</a></li>
        <li><a href="Map.html">Map</a></li>
        <li><a href="Chart.html">Chart</a></li>
        <li><a href="Contact.html">Contact</a></li>
        <li><a href="Login.html">Login</a></li>
    </ul>

    <h2>Search</h2>

    <div class="row">
        <div class="left" style="background-color:#bbb;">
            <h2>Location</h2>
            <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search...">

            <ul id="myMenu">
                <li><a href="#" onclick="getElementById('location').value='Los Angeles'">Los Angeles</a></li>
                <li><a href="#">San Diego</a></li>
                <li><a href="#">San Jose</a></li>
                <li><a href="#">San Francisco</a></li>
                <li><a href="#">Fresno</a></li>
                <li><a href="#">Sacramento</a></li>
                <li><a href="#">Long Beach</a></li>
                <li><a href="#">Oakland</a></li>
                <li><a href="#">Bakersfield</a></li>
                <li><a href="#">Anaheim</a></li>
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
        </script>
</body>

</html>
