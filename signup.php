<!DOCTYPE html>

<html>
<meta name="viewport" content="width=device-width, initial scale=1.0">

<head>
    <title> Login Form </title>
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
                <li class="active"> <a href="login-form.html"> LOGIN </a> </li>
            </ul>

            <ul class="main-nav">
                <li> <a href="index.html"> HOME </a> </li>
                <li> <a href="services.html"> SERVICES </a> </li>
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

        <form id="signupform">
            <p> Email: </p>
            <input type="text" name="email" placeholder="Enter your email here">
            <p> Password: </p>
            <input type="password" name="password" placeholder="Enter your desired password">
            <p> Password Again: </p>
            <input type="password" name="password" placeholder="Enter your password here again (should match with the first one)">
            <input type="submit" name="submit" value="Register">
            <a href="login-form.html"> Already a registered user? </a>

        </form>

    </div>


</body>

</html>
