<?php

session_start();

?>

<!DOCTYPE html>

<html>
<meta name="viewport" content="width=device-width, initial scale=1.0">

<head>
    <title> Login Success!! </title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/javascript.js"></script>
</head>


<body>

    <header>
        <div class="row">

            <div class="logo">
                <img src="img/movemandu-white.png" alt="Movemandu Logo">
            </div>

            <ul class="login-nav">
                <li class="active"> <a href="login-form.php"> LOGIN </a> </li>
            </ul>

            <ul class="main-nav">
                <li> <a href="index.php"> HOME </a> </li>
                <li> <a href="services.php"> SERVICES </a> </li>
                <li> <a href="#"> STUDENTS </a> </li>
                <li> <a href="#"> OWNERS </a> </li>
                <li> <a href="#"> DEALERS </a> </li>
                <li> <a href="#"> ABOUT </a> </li>
            </ul>


        </div>
    </header>


    <div class="welcome">
        <h2> Welcome
            <?php
            if (isset($_SESSION['u_id'])) {
                echo $_SESSION['u_username'];
            }
        ?>

        </h2>

    </div>




</body>

</html>
