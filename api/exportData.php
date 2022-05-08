<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require('database.php');

$sql = "SELECT * FROM MEASUREMENT ORDER BY MeasurementID";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    $delimiter = ","; 
    $filename = "measurement-data_" . date('Y-m-d') . ".csv";

    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('MeasurementID', 'Temperature', 'Humidity', 'CO2', 'NodeID', 'MeasurementTime', 'RiskFactor'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){  
        $lineData = array($row['measurement_id'], $row['temperature'], $row['humidity'], $row['co2'], 
        $row['node_id'], $row['measurement_time'], $row['risk_factor']); 
        fputcsv($f, $lineData, $delimiter);
    } 
     
    // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit;


?>    
</body>
</html>
<?php

require('database.php');

$sql = "SELECT * FROM MEASUREMENT ORDER BY MeasurementID";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    $delimiter = ","; 
    $filename = "measurement-data_" . date('Y-m-d') . ".csv";

    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('MeasurementID', 'Temperature', 'Humidity', 'CO2', 'NodeID', 'MeasurementTime', 'RiskFactor'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){  
        $lineData = array($row['measurement_id'], $row['temperature'], $row['humidity'], $row['co2'], 
        $row['node_id'], $row['measurement_time'], $row['risk_factor']); 
        fputcsv($f, $lineData, $delimiter);
    } 
     
    // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit;


?>