<?php

require('database.php');

$input = json_decode(file_get_contents('php://input'), true);

$nodeid = $input['nodeid'];
$temp = $input["temperature"];
$humidity = $input["humidity"];
$CO2 = $input["CO2"];
$measurementtime = $input["measurementtime"];
$riskfactor = $input["threatlevel"];

$stmt = $con->prepare("INSERT INTO MEASUREMENT (NodeID, Temperature, Humidity, CO2, MeasurementTime, RiskFactor) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("iiddsi", $nodeid, $temp, $humidity, $CO2, $measurementtime, $riskfactor);
$stmt->execute();
            
if ($stmt->affected_rows != 1) {
    echo "Failure";
}

?>

