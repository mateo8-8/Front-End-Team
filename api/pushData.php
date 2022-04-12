<?php

echo "entering php file";

require('database.php');
$sql = "SELECT * FROM MEASUREMENT ORDER BY MeasurementID DESC LIMIT 1";
$result = mysqli_query($con, $sql);

echo "post query";
if (mysqli_num_rows($result) > 0) {
  
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
   $measurementData[] = $row;
   json_encode($measurementData);
   echo json_encode($measurementData);
   json_decode($measurementData);
   
  }
} else {
  echo "0 results";
}

echo "if else";

mysqli_close($con);
?>