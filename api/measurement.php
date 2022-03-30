<?php

require('database.php');

$input = json_decode(file_get_contents('php://input'), true);

$measurementid = $input['measurementid'];
$nodeid = $input['nodeid'];
$temp = $input["temperature"];
$humidity = $input["humidity"];
$CO2 = $input["CO2"];

$stmt = $con->prepare("INSERT INTO MEASUREMENT (MeasurementID, NodeID, Temperature, Humidity, CO2) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("iiidd", $measurementid, $nodeid, $temp, $humidity, $CO2);
$stmt->execute();
            
if ($stmt->affected_rows != 1) {
    echo "Failure";
}

?>

