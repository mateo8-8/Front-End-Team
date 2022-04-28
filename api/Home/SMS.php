<!DOCTYPE html>
<html>

<head>
    <title>SMS</title>

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

        $message = $_POST['message'];
        $sql = "INSERT INTO SUBSCRIBER(Phone) VALUES ('$message')";

        if (mysqli_query($con, $sql)) {
            echo "<h3>The Phone Number Has Successfully Added To The Database</h3>";
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