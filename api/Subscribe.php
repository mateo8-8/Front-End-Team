<!DOCTYPE html>
<html>

<head>
    <title>Subscribtion</title>
</head>

<body>
    <h1>Subscribtion</h1>

        <?php
        echo '$_REQUEST['u_name']';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_POST['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }

        /*         // servername => localhost
        // username => checkout
        // password => checkout
        // database name => checkout
        // before it was aq
        $conn = mysqli_connect("localhost", "admin", "admin", "email");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $usr_name = $_REQUEST['u_name'];
        $pword = $_REQUEST['pword'];

        // Performing insert query execution
        // here our table name is college
        // before I inserted into "checkout"
        $sql = "INSERT INTO chkout(uname, pword) VALUES ('$usr_name',
			'$pword')";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            //echo nl2br("\n$first_name\n $last_name\n "
            //	. "$gender\n $address\n $email");
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn); */
        ?>
</body>

</html>
