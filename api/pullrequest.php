<?php

require('database.php');
$sql = "SELECT * FROM MEASUREMENT ORDER BY MeasurementID DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
   $measurementData[] = $row;
   json_encode($measurementData);
   echo json_decode($measurementData);
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>