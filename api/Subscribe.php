<!DOCTYPE html>
<html>

<head>
    <title>Subscribtion</title>
</head>

<body>
    <h1>Subscription</h1>

    <?php
    include 'database.php';

    // Check Connection
    if ($con === false) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    $email = $_POST['mail'];
    $sql = "INSERT INTO SUBSCRIBER(Email) VALUES ('$email')";

    if (mysqli_query($con, $sql)) {
        echo "<h3>Data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($con);
    }

    // Close Connection
    mysqli_close($con);
    ?>
</body>

</html>