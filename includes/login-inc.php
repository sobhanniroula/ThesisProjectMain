<?php

session_start(); 

    
if (isset($_POST['submit'])) {
    
    include 'inc.php';
    
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    // Error Handlers
    // Check if inputs are empty
        if (empty($username) || empty($password)) {
        header("Location: ../login-form.php?login=empty");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_name='$username' OR email='$username'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
            
        if ($resultCheck < 1) {
            header("Location: ../login-form.php?login=error");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
               // De-hashing the password
                $hashedPasswordCheck = password_verify($password, $row['user_password']);
                
                if ($hashedPasswordCheck == false) {
                    header("Location: ../login-form.php?login=error");
                    exit();
                } elseif ($hashedPasswordCheck == true) {
                    // Login the user here
                    $_SESSION['u_id'] = $row['id'];
                    $_SESSION['u_firstname'] = $row['first_name'];
                    $_SESSION['u_lastname'] = $row['last_name'];
                    $_SESSION['u_email'] = $row['email'];
                    $_SESSION['u_username'] = $row['user_name'];
                    header("Location: ../logged-in.php");
                    exit();
                }
            }
        }
    }
    
} else {
    header("Location: ../login-form.php?login=errors");
    exit();
}





?>
