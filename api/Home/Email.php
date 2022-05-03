<!DOCTYPE html>
<html lang="en">

<head>
    <title>Email</title>

    <style>
        input {
            display: inline-block;
            text-align: center;
            vertical-align: text-top;
        }

        form {
            margin: 5px;
            text-align: left;
            margin-left: 525px;
        }
    </style>
</head>

<body>
    <form action="Subscribe.php" method="POST">
        <input type="email" placeholder="Email address" name="mail" size="45" required="required">
        <button id="subscribe">Subscribe Email</button>
    </form>

    <form action="Unsubscribe.php" method="POST">
        <input type="email" placeholder="Email address" name="unsub" size="45" required="required">
        <button id="unsubscribe">Unsubscribe Email</button>
    </form>

    <form action="SMS.php" method="POST">
        <input placeholder="Phone Number" name="message" size="45" required="required">
        <button id="sms">Subscribe Phone Number</button>
    </form>

    <form action="SMS-U.php" method="POST">
        <input placeholder="Phone Number" name="message-u" size="45" required="required">
        <button id="sms-u">Unsubscribe Phone Number</button>
    </form>
</body>

</html>