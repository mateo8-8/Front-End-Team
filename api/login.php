<?
if(!isset($_POST['but_submit'])){
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>

	<body>
		<center>
			<div class="container">
				<form method="post" action="">
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
								id="txt_uname"
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

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from USER where user='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: home.php');
        }else{
            echo "Invalid username and password";
        }

    }
}

?>
