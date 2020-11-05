<?php
require_once "../config.php";

require "../functions/all.php";
//testing if form submitted with the right Method, POST.
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //Get submitted values, email and password.
    $email = fixer( $_POST['email']);
    $password = fixer( $_POST['password']);
    //Converting password to MD5 hash
    $password = md5($password);
    if(    loginChecker($conn, $email, $password))
    {
        // change user online status to Online statement
        $change = "UPDATE users SET online='1' WHERE email='$email'";


        //change it
        $conn->query( $change);
        //Setting user online session presence variable
        $_SESSION['userID'] = $email;
        header("location: ../dashboard.php");
        exit();
    }
    else
    {
        header("location: ../login.php?err=1");
        exit();
    }
}