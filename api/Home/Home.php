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

    <script src="https://313wildfire.com/Front-End-Team/api/Home/Home.js"></script>
    <link rel="stylesheet" href="https://313wildfire.com/Front-End-Team/api/Home/Home.css">
</head>

<body id="grad">
    <ul id="nav">
        <li><strong><a class="active" href="https://313wildfire.com/Front-End-Team/api/Home/Home.php">Home</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/OpenWeatherAPI.php">Open Weather API</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Search.php">Search</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Map.php">Map</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Combo.php">Combo Chart</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Gauge.php">Gauge Chart</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Contact.php">Contact</a></strong></li>
    </ul>

    <div class="banner">
        <div class="banner-content">
            <div class="banner-text">
                <strong>Alert:</strong> Node 1 is Down.
            </div>
            <button class="banner-close" type="button">
                <span id="close">
                    X
                </span>
            </button>
        </div>
    </div>

    <div class="right">
        <div class="center">
            <h2>Subscribe To Our Alarm System</h2>
            <p>If you wish to get notification through email when the fire level went over the risk factor.</p>
            <p>Please enter your email address in the textbox.</p>

<<<<<<< HEAD
<<<<<<< HEAD
            <?php include 'Email.php' ?>
=======
>>>>>>> b2fb262 (Home Errors)
            <button onclick="showNotification()">Show Notification</button>
        </div>
    </div>
</body>

</html>