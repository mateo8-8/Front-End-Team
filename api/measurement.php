<?php

require('database.php');

$input = json_decode(file_get_contents('php://input'), true);

$nodeid = $input['nodeid'];
$temp = $input["temperature"];
$humidity = $input["humidity"];
$CO2 = $input["CO2"];
$measurementtime = $input["measurementtime"];
$threatlevel = $input["threatlevel"];

$stmt = $con->prepare("INSERT INTO MEASUREMENT (NodeID, Temperature, Humidity, CO2, MeasurementTime, ThreatLevel) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("iiddsi", $nodeid, $temp, $humidity, $CO2, $measurementtime, $threatlevel);
$stmt->execute();
            
if ($stmt->affected_rows != 1) {
    echo "Failure";
}

?>

