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
        #grad {
            background-color: red;
            background-image: linear-gradient(yellow, red);
        }

        #nav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #EB0A0A;
            color: black;
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
            background-color: white;
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

        .banner {
            background: #5D8AA8;
            background-color: orange;
        }

        .banner-content {
            padding: 20px;
            max-width: 500px;
            margin: 0 auto;
            display: flex;
            align-items: center;
        }

        .banner-text {
            flex-grow: 1;
            line-height: 1.5;
            font-family: "Quicksand", sans-serif;
            color: black;
        }

        .banner-close {
            background: none;
            border: none;
            cursor: pointer;
        }

        span {
            color: #ffffff;
        }
    </style>
</head>

<body id="grad">
    <ul id="nav">
        <li><strong><a class="active" href="https://313wildfire.com/Front-End-Team/api/Home.php" style="color:black;">Home</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/OpenWeatherAPI.php" style="color:black;">Open Weather API</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Search.php" style="color:black;">Search</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Map.php" style="color:black;">Map</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Combo.php" style="color:black;">Combo Chart</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Gauge.php" style="color:black;">Gauge Chart</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Contact.php" style="color:black;">Contact</a></strong></li>
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

            <?php include 'Email.php' ?>
            <button onclick="showNotification()">Show Notification</button>
        </div>
    </div>

    <script>
        document.getElementById("close").addEventListener("click", function() {
            this.closest(".banner").style.display = "none";
        });
    </script>
</body>

</html>