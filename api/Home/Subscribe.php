<!DOCTYPE html>
<html>

<head>
    <title>Subscription</title>

    <link rel="stylesheet" href="https://313wildfire.com/Front-End-Team/api/Home/Subscribe.css">
</head>

<body>
    <div>
        <?php
        include '../database.php';

        // Check Connection
        if ($con === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $email = $_POST['mail'];
        $sql = "INSERT INTO SUBSCRIBER(Email) VALUES ('$email')";

        if (mysqli_query($con, $sql)) {
            echo '<h3>The Data Has Successfully Added Into The Database</h3>';
            echo '<script>alert("Email Successfully Added")</script>';
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($con);
        }

        // Close Connection
        mysqli_close($con);
        ?>
    </div>
</body>

</html>