<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include_once('Exception.php');
include_once('PHPMailer.php');
include_once('SMTP.php');
// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

$sql = "SELECT Phone FROM PHONE";
$result = mysqli_query($con, $sql);

$sql1 = "SELECT Name FROM PHONE";


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
        $mail->addAddress($row[0] . "@vtext.com", 'Personal User');                // Verizon
        $mail->addAddress($row[0] . "@txt.att.net", 'Personal User');            // AT&T
        $mail->addAddress($row[0] . "@smsmyboostmobile.com", 'Personal User');   // Boost 
        $mail->addAddress($row[0] . "@sms.cricketwireless.net", 'Personal User');  // Cricket
        $mail->addAddress($row[0] . "@messaging.sprintpcs.com", 'Personal User');  // Sprint
        $mail->addAddress($row[0] . "@tmomail.net", 'Personal User');              // TMobile
        $mail->addAddress($row[0] . "@vmobl.com", 'Personal User');                // Virgin Mobile
        $mail->addAddress($row[0] . "@msg.fi.google.com", 'Personal User');  
    }
    
    $mail->addReplyTo('sphost1a@gmail.com', 'Admin'); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    // $mail->Subject = " There is a Warning! Fire Detected";
    // $mail->Body = 'ATTENTION: 
    
    // Wild fire risk detected!!';
    $mail->AltBody = 'Alert! ' . ' Hello '. $sql1[0] ." Fire Detected. Please be Safe.";

    $mail->send();
    echo "Email message sent.";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}
?>
