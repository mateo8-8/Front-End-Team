<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include_once('Exception.php');
include_once('PHPMailer.php');
include_once('SMTP.php');



// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

$sql = "SELECT Email FROM SUBSCRIBER";
$sqlLong = "SELECT LON FROM NODE";
$sqlLat = "SELECT LAT FROM NODE";
$temp = "SELECT Temperature FROM MEASUREMENT";
$humid = "SELECT Humidity FROM MEASUREMENT";
$co2 = "SELECT CO2 FROM MEASUREMENT";
$result = mysqli_query($con, $sql);
$resultLong = mysqli_query($con, $sqlLong);
$resultLat = mysqli_query($con, $sqlLat);
$resultTemp = mysqli_query($con, $temp);
$resultHumid = mysqli_query($con, $humid);
$resultCO2 = mysqli_query($con, $co2);
$arrayLong = array();
$arrayLat = array();
$arrayTemp = array();
$arrayHumid = array();
$arrayCO2 = array();



try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'sphost1a@gmail.com'; // YOUR gmail email
    $mail->Password = 'Checkout!'; // YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom('sphost1a@gmail.com', '313 Wild Fire Detection');
    while($row = mysqli_fetch_array($result)) {
        $mail->addAddress($row[0], 'Personal User');
    }
    
    $mail->addReplyTo('sphost1a@gmail.com', 'Admin'); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = "Warning! Fire Detected";
    while($row = mysqli_fetch_array($resultLong)) {
        array_push($arrayLong, $row[0]);
    }
    while($row = mysqli_fetch_array($resultLat)) {
        array_push($arrayLat, $row[0]);
    }
    while($row = mysqli_fetch_array($resultTemp)) {
        array_push($arrayTemp, $row[0]);
    }
    while($row = mysqli_fetch_array($resultHumid)) {
        array_push($arrayHumid, $row[0]);
    }
    while($row = mysqli_fetch_array($resultCO2)) {
        array_push($arrayCO2, $row[0]);
    }

    $length = sizeof($arrayHelp);

    $mail->Body = 'ATTENTION! Wild fire risk detected at Longitude: ' . $arrayLong[0] 
    . ' Latitude: ' . $arrayLat[0] . ' Here are the conditions: Temp(Celcius): \n' . $arrayTemp[0] . ' Humidity: ' 
    . $arrayHumid[0] . ' CO2: ' . $arrayCO2[0];



    $mail->AltBody = 'Alert';

    $mail->send();
    echo "Email message sent.";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}
?>
