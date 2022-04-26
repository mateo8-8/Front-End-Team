<!DOCTYPE html>
<html>

<head>
    <title>Subscription</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
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
            echo 'Home.php';
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