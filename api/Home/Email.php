<!DOCTYPE html>
<html lang="en">

<head>
    <title>Email</title>
</head>

<body>
    <form action="Subscribe.php" method="POST">
        <input type="email" placeholder="Email address" name="mail" size="50" required="required">
        <button id="subscribe">Subscribe</button>
    </form>

    <form action="Unsubscribe.php" method="POST">
        <input type="email" placeholder="Email address" name="unsub" size="50" required="required">
        <button id="unsubscribe">Unsubscribe</button>
    </form>

    <form action="SMS.php" method="POST">
        <input placeholder="Phone Number" name="message" size="50" required="required">
        <button id="sms">Add Phone Number</button>
    </form>

    <form action="SMS-U.php" method="POST">
        <input placeholder="Phone Number" name="message-u" size="50" required="required">
        <button id="sms-u">Add Phone Number</button>
    </form>
</body>

</html>