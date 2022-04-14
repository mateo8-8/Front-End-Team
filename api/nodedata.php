<?php

require('database.php');
$sql = "SELECT * FROM NODE ORDER BY NodeID";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row

  $measurementData = [];
  while($row = mysqli_fetch_assoc($result)) {

   array_push($nodeData,$row);
  }
  echo json_encode($nodeData);
} else {
  echo "0 results";
}

mysqli_close($con);
?>