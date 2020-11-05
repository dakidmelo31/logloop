<?php
session_start();
require "../config.php";
//get Logged In user email
 $user = $_SESSION['userID'];

 // change user online status to offline statement
 $change = "UPDATE users SET online='0' WHERE email='$user;'";
 //change it
$conn->query( $change);
session_destroy();

header("location: ../login.php");
exit();