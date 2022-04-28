<!DOCTYPE html>
<html lang="en">

<head>
    <title>Email</title>

    <style>
        #boxes {
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="boxes">
        <form action="Subscribe.php" method="POST">
            <input type="email" placeholder="Email address" name="mail" size="50" required="required">
            <button id="subscribe">Subscribe Email</button>
        </form>

        <form action="Unsubscribe.php" method="POST">
            <input type="email" placeholder="Email address" name="unsub" size="50" required="required">
            <button id="unsubscribe">Unsubscribe Email</button>
        </form>

        <form action="SMS.php" method="POST">
            <input placeholder="Phone Number" name="message" size="50" required="required">
            <button id="sms">Subscribe Phone Number</button>
        </form>

        <form action="SMS-U.php" method="POST">
            <input placeholder="Phone Number" name="message-u" size="50" required="required">
            <button id="sms-u">Unsubscribe Phone Number</button>
        </form>
    </div>
</body>

</html>