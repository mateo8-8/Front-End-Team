<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('Exception.php');
require('PHPMailer.php');
require('SMTP.php');

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

$sql = "SELECT Phone FROM PHONE";
$result = mysqli_query($con, $sql);



    include('../database.php');

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
        // $var = "@txt.att.net";
        $mail->addAddress( $row[0] .= "@txt.att.net", 'Personal User');

      
    }


    $mail->addReplyTo('sphost1a@gmail.com', 'Admin'); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = "Warning! Fire Detected";
    $mail->Body = 'ATTENTION:
    
    Wild fire risk detected!!';
    $mail->AltBody = 'Alert';

    $mail->send();
    echo "Email message sent.";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}
?>