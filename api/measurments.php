<?php

require('database.php');

$input = json_decode(file_get_contents('php://input'), true);

$measurmentid = $input['data']['measurmentid'];
$nodeid = $input['data']['nodeid'];
$temp = $input['data']["temperature"];
$humidity = $input['data']["humidity"];
$CO2 = $input['data']["CO2"];

$stmt = $con->prepare("INSERT INTO MEASURMENT (MeasurmentID, NodeID, Temperature, Humidity, CO2) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("iiidd", $measurmentid, $nodeid, $temp, $humidity, $CO2);
$stmt->execute();
            
if ($stmt->affected_rows != 1) {
    echo "Failure";
}

?>