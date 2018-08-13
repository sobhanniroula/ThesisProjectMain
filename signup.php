<?php

session_start();

?>


    <!DOCTYPE html>

    <html>
    <meta name="viewport" content="width=device-width, initial scale=1.0">

    <head>
        <title> Signup Form </title>
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

        <div class="signupbox">

            <div id="signup-title">
                <h1> Signup Form </h1>
            </div>

            <form id="signupform" action="includes/signup-inc.php" method="POST">
                <p> First Name: </p>
                <input type="text" name="firstname" placeholder="Enter your first name here">
                <p> Last Name: </p>
                <input type="text" name="lastname" placeholder="Enter your email here">
                <p> Username: </p>
                <input type="text" name="username" placeholder="Enter a username you want">
                <p> Email: </p>
                <input type="text" name="email" placeholder="Enter your email here">
                <p> Password: </p>
                <input type="password" name="password" placeholder="Enter your desired password">
                <input type="submit" name="submit" value="Register">
                <a href="login-form.php"> Already a registered user? </a>

            </form>

        </div>


    </body>

    </html>
