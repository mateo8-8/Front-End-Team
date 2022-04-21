<?php
include "database.php";
session_start();


// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
}

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
<!doctype html>
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
</html>
