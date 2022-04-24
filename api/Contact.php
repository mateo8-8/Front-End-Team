<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact</title>
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
            text-align: center;
        }
        
        .left h2 {
            padding-left: 8px;
        }
        
        .right {
            flex: 65%;
            padding: 15px;
            text-align: center;
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
        <!-- <li><a href="https://313wildfire.com/Front-End-Team/pages/About.html">About</a></li> -->
        <li><a href="https://313wildfire.com/Front-End-Team/api/OpenWeatherAPI.php">Open Weather API</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/api/Search.php">Search</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/pages/Map.html">Map</a></li>
        <!-- <li><a href="https://313wildfire.com/Front-End-Team/pages/Chart.html">Chart</a></li> -->
        <li><a href="https://313wildfire.com/Front-End-Team/pages/Combo.html">Combo Chart</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/pages/Gauge.html">Gauge Chart</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/pages/Contact.html">Contact</a></li>
    </ul>

    <h2>Contact</h2>

    <div class="row">
        <div class="right" style="background-color:#ddd;">
            <h3>Front End Team</h3>

            <p>Chad Atkins<br>
                <a href="mailto:atkinsct@dukes.jmu.edu">atkinsct@dukes.jmu.edu</a></p>
            <p>Hsuan-Yun Chang<br>
                <a href="mailto:chang3hx@dukes.jmu.edu">chang3hx@dukes.jmu.edu</a></p>
            <p>Ethan Simmers<br>
                <a href="mailto:simmerea@dukes.jmu.edu">simmerea@dukes.jmu.edu</a></p>
        </div>

        <div class="right" style="background-color:#ddd;">
            <h3>Central Team</h3>

            <p>Jacob Schrauder<br>
                <a href="mailto:schraujm@dukes.jmu.edu">schraujm@dukes.jmu.edu</a></p>
            <p>Samuel Dorow<br>
                <a href="mailto:dorowsj@dukes.jmu.edu">dorowsj@dukes.jmu.edu</a></p>
            <p>Karan Nair<br>
                <a href="mailto:nairkr@dukes.jmu.edu">nairkr@dukes.jmu.edu</a></p>
        </div>

        <div class="right" style="background-color:#ddd;">
            <h3>Back End Team</h3>

            <p>Chenguang Cao<br>
                <a href="mailto:cao3cx@dukes.jmu.edu">cao3cx@dukes.jmu.edu</a></p>
            <p>Evan Day<br>
                <a href="mailto:dayem@dukes.jmu.edu">dayem@dukes.jmu.edu</a></p>
            <p>Boyuan Gou<br>
                <a href="mailto:goubx@dukes.jmu.edu">goubx@dukes.jmu.edu</a></p>
            <p>Eddie Harris<br>
                <a href="mailto:harr23ce@dukes.jmu.edu">harr23ce@dukes.jmu.edu</a></p>
        </div>

        <div class="right" style="background-color:#ddd;">
            <h3>Integration Team</h3>

            <p>Cole David<br>
                <a href="mailto:nuttercd@dukes.jmu.edu">nuttercd@dukes.jmu.edu</a></p>
            <p>Ethan Hughes<br>
                <a href="mailto:hugheseb@dukes.jmu.edu">hugheseb@dukes.jmu.edu</a></p>
            <p>Matt McCreary<br>
                <a href="mailto:mccreamb@dukes.jmu.edu">mccreamb@dukes.jmu.edu</a></p>
        </div>
    </div>
</body>

</html>