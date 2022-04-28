<!DOCTYPE html>
<html>

<head>
    <title>SMS</title>

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

        $message = $_POST['message'];
        $sql = "DELETE FROM PHONE WHERE Phone='$message'";

        if (mysqli_query($con, $sql)) {
            echo "<h3>The Phone Number Has Successfully Deleted From The Database</h3>";
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