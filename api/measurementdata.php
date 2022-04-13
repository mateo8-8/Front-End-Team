<?php

require('database.php');
$sql = "SELECT * FROM MEASUREMENT ORDER BY MeasurementID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row

  $measurementData = [];
  while($row = mysqli_fetch_assoc($result)) {

   array_push($measurementData,$row);
  }
  echo json_encode($measurementData);
} else {
  echo "0 results";
}

mysqli_close($conn);
?>