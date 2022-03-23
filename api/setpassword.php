<?php

require('database.php');

$username = strtolower(readline("Enter username: "));
$password1 = readline("Enter a password: ");
$password2 = readline("Verify your password: ");

if($password1 == $password2){
	$hash = password_hash($password1, PASSWORD_DEFAULT);
	$stms = $con->prepare("UPDATE USER SET password = ? WHERE user = ?");
	$stms->bind_param("ss", $hash, $username);
	$stms->execute();
	if($stms->affected_rows == 1){
		echo "Password Successfully Changed";
	} else {
		echo "Password Not Changed";
	}
} else {
	echo "Passwords Do Not Match";
}
mysqli_close($con);
?>