<?php 

session_start();


/*
$host="localhost"; // Host name
$user="root"; // Mysql username
$password=""; // Database password
$db_name="movemandu"; // Database name

// Connection to the database, select database and error message.
$conn = mysqli_connect($host, $user ,$password, $db_name) or die("cannot connect");


if(isset($_POST['user_name'])) {
    $username=$_POST['user_name'];
    $password=$_POST['user_password'];
    
    $sql="select * from users where user_name='".$username."' AND user_password='".$password."' limit 1";
    
    $result=mysqli_query($sql);
    
    if(mysqli_num_rows($result)===1) {
        echo "You have successfully logged in";
        exit();
    }
    else{
        echo "Either Username or Password is wrong";
        exit();
    }
    
}
*/

?>


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

    <div class="loginbox">
        <img src="img/user-logo.png" class="user-logo">
        <div id="login-title">
            <h1> Login Form </h1>
        </div>

        <form id="loginform" action="includes/login-inc.php" method="POST">
            <p> Username: </p>
            <input type="text" name="username" placeholder="Enter your username here">
            <p> Password: </p>
            <input type="password" name="password" placeholder="Enter your password here">
            <input type="submit" name="submit" value="Login">
            <a href="#"> Password Lost? </a>
            <a href="signup.php"> Register for new user </a>
        </form>

    </div>


</body>

</html>
