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
        include 'database.php';

        // Check Connection
        if ($con === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $email = $_POST['mail'];
        $sql = "DELETE FROM SUBSCRIBER WHERE Email='atkinsct@dukes.jmu.edu'";

        if (mysqli_query($con, $sql)) {
            echo "<h3>Data deleted/h3>";
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