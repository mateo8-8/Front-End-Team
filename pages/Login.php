<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        #nav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }
        
        #nav li {
            float: left;
        }
        
        #nav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        
        #nav li a:hover {
            background-color: #111;
        }
        
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <ul id="nav">
        <li><a class="active" href="home.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="search.html">Search</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="login.html">Login</a></li>
    </ul>

    <h2>Login</h2>

    <?php include 'index.php';?>
</body>

</html>