<?php
require_once "../config.php";
require_once "../functions/all.php";
$new_ref_balance = 0;
$empty_slot = '';
if($_SERVER['REQUEST_METHOD'] == "POST") {

    //Collecting user registration data

    $first_name = fixer($_POST['sname']);
    $fll_name = fixer($_POST['full_name']);
    $email = fixer($_POST['email']);
    $tel = fixer($_POST['tel']);
    $password = fixer($_POST['password']);
    $password = md5($password);//coverting password to MD5 hash
    $gender = fixer($_POST['gender']);
    $place = fixer($_POST['place']);

    // Verify if the Phone number exists already

//Upload picture
    $final_destination = "../assets/img/profilepics" ;
    $picture_name = md5($email);
    $target_pic = $final_destination . basename($_FILES['profilepic']['name']);
    $target_pic_file_type = strtolower(pathinfo($target_pic, PATHINFO_EXTENSION));
    if(move_uploaded_file($_FILES['profilepic']['tmp_name'], $final_destination . $picture_name))
    {
        die("picture uploaded");
    }
    else
    {
        die("picture not uploaded");
    }
}


$adduser = "INSERT INTO users (username, fullname, email, password, phone ) VALUES('$first_name','$fll_name','$email','$password','$tel')";
if($conn->query($adduser) == true)
{


    $_SESSION['userID'] =$email;
    header("location: ../dashboard.php");
    exit();
}
