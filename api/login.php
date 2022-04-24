<<<<<<< HEAD
<?php
if(!isset($_POST['but_submit'])){
?>

<!DOCTYPE html>
<html lang="en">

	<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login</title>
	</head>

	<body>
		<center>
			<div class="container">
				<form method="post" action="login.php">
					<div id="div_login">
						<h1>Login</h1>
						<div>
							<input
								type="text"
								class="textbox"
								id="txt_uname"
								name="txt_uname"
								placeholder="Username"
							/>
						</div>
						<div>
							<input
								type="password"
								class="textbox"
								id="txt_pwd"
								name="txt_pwd"
								placeholder="Password"
							/>
						</div>
						<div>
							<input
								type="submit"
								value="Submit"
								name="but_submit"
								id="but_submit"
							/>
						</div>
					</div>
				</form>
			</div>
		</center>
	</body>
</html>
<?php
}
require('database.php');
	
if(isset($_POST['but_submit'])){
	session_start();
    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

	$stms = $con->prepare("SELECT password FROM USER WHERE user = ?");
	$stms->bind_param("s", $uname);
	$stms->execute();
	$stms->bind_result($hash);

	if($stms->fetch() && password_verify($password, $hash)){
		$_SESSION['uname'] = $uname;
        header('Location: home.php');
	} else{
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
		showNotification();
        echo "Invalid username and password";
    }
}
?>
=======
<?php
if(!isset($_POST['but_submit'])){
?>

<!DOCTYPE html>
<html lang="en">

	<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login</title>
	</head>

	<body>
		<center>
			<div class="container">
				<form method="post" action="login.php">
					<div id="div_login">
						<h1>Login</h1>
						<div>
							<input
								type="text"
								class="textbox"
								id="txt_uname"
								name="txt_uname"
								placeholder="Username"
							/>
						</div>
						<div>
							<input
								type="password"
								class="textbox"
								id="txt_pwd"
								name="txt_pwd"
								placeholder="Password"
							/>
						</div>
						<div>
							<input
								type="submit"
								value="Submit"
								name="but_submit"
								id="but_submit"
							/>
						</div>
					</div>
				</form>
			</div>
		</center>
	</body>
</html>
<?php
/* }
require('database.php');
	
if(isset($_POST['but_submit'])){
	session_start();
    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

	$stms = $con->prepare("SELECT password FROM USER WHERE user = ?");
	$stms->bind_param("s", $uname);
	$stms->execute();
	$stms->bind_result($hash);

	if($stms->fetch() && password_verify($password, $hash)){
		$_SESSION['uname'] = $uname;
        header('Location: home.php');
	} else{
        echo '<script type="text/javascript"> 
		

		var notification = new Notification("Wildfire Detection", {
            body : \'Invalid Username or Password\',
			icon: \'https://313wildfire.com/Front-End-Team/api/SadFace.png\',
        });
        
        setTimeout(function() { notification.close(); }, 5000);

		window.location = "https://313wildfire.com/Front-End-Team/api/login.php";
		</script>';

    }
} */
//?>
>>>>>>> 13ea13d96e6231ee33e6c423c870950e6280d359
