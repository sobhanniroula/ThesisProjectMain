<?php

if (isset($_POST['submit'])) {
    include_once 'inc.php';
    
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    
    // Error handlers
    // check for empty fields
    if (empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password)) {
      //if ($firstname == "" || $lastname == "" || $email == "" || $username == "" || $password == "") {
        header("Location: ../signup.php?signup=empty");
        exit();
    } else {
    // check if input characters are valid
        if(!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $lastname)) {
            header("Location: ../signup.php?signup=invalid");
            exit();
        } else {
            // check if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../signup.php?signup=email");
                exit();
            } else {
                $sql = "SELECT * FROM users WHERE user_name='$username'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                
                if ($resultCheck > 0) {
                header("Location: ../signup.php?signup=usertaken");
                    exit();
                } else {
                    // Hashing the password
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    // Insert the user into the database
                    $sql = "INSERT INTO users (first_name, last_name, user_name, email, user_password) VALUES ('$firstname', '$lastname', '$username',      '$email', '$hashedPassword');";
                    mysqli_query($conn, $sql);
                    header("Location: ../signed-up.php");
                    exit();
                }  
            }
       }
  }
                    
} else {
    header("Location: ../signup.php");
    exit();
}



?>
