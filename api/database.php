<?php
$servername = "localhost:3306";
$username = "wildfire";
$password = "WildPass";
$dbname = "wildfire";

//create connection
$con=mysqli_connect($servername, $username, $password, $dbname);

//Check connection

if (!$con)
{
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

?>
