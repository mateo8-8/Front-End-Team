<!DOCTYPE html>
<html>

<head>
    <title>Subscribtion</title>
</head>

<body>
    <h1>Subscription</h1>

    <?php
    include 'database.php';

    /* if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['mail'];
        if (empty($email)) {
            echo "Name is empty";
        } else {
            echo $email;
        }
    } */

    // Check Connection
    if ($con === false) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    // Taking all 5 values from the form data(input)
    //$usr_name = $_REQUEST['u_name'];
    //$pword = $_REQUEST['pword'];
    //$email = $_REQUEST['Email'];

    // Performing insert query execution
    // here our table name is college
    // before I inserted into "checkout"
    //$sql = "INSERT INTO checkout(uname, pword) VALUES ('$usr_name', '$pword')";

    $email = $_POST['mail'];
    $sql = "INSERT INTO SUBSCRIBER(Email) VALUES ('$email')";

    if (mysqli_query($con, $sql)) {
        echo "<h3>Data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        //echo nl2br("\n$first_name\n $last_name\n "
        //	. "$gender\n $address\n $email");
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($con);
    }

    // Close connection
    mysqli_close($con);
    ?>
</body>

</html>