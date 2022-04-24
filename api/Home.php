<?php

// Notification
echo '<script type="text/javascript">
var notificationsEnabled = false;

function initNotifications() {
    if (window.Notification) {
        Notification.requestPermission(function(permission) {
            if (permission === \'granted\') {
                notificationsEnabled = true;
            } else {
                alert("You Denied Notifications, It\'s So Sad");
            }
        });
    } else {
        alert("Your Browser Doesn\'t Support Notifications API");
    }
}

function showNotification() {
    if (notificationsEnabled) {
        var notification = new Notification("Wildfire Detection", {
            body : \'Testing\',
        });
        
        setTimeout(function() { notification.close(); }, 5000);
        console.log("Worked");
    } else {
        alert("Notifications Are Disabled");
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
        <li><a href="https://313wildfire.com/Front-End-Team/api/OpenWeatherAPI.php">Open Weather API</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/api/Search.php">Search</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/api/Map.php">Map</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/api/Combo.php">Combo Chart</a></li>
        <!-- <li><a href="https://313wildfire.com/Front-End-Team/pages/Chart.html">Chart</a></li> -->
        <!-- <li><a href="https://313wildfire.com/Front-End-Team/pages/Combo.html">Combo Chart</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/pages/Gauge.html">Gauge Chart</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/pages/Contact.html">Contact</a></li> -->
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
</body>

</html>