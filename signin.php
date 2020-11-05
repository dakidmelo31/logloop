<?php
require_once "config.php";
require_once "functions/all.php";
$submit  = '<input type="submit" name="login" value="Goto Dashboard" class="btn-submit">';
$ref_name = '';
$ref_join = '';
$ref_level= '';
$ref_title= '';
$hideit = 'hidden';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="device-width, initial-scale=1.0" />
    <title>Login To Dashboard | Standec Group Affiliates</title>
    <link rel="stylesheet" href="assets/css/signin.css">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/main.js"></script>
</head>

<body>
<!-- Main Page Div -->
<div class="main-page" id="main-page">
    <!--Main Page Div Overlay -->
    <div class="main-page-overlay" id="main-page-overlay">
        <div class="form-container">
            <h3>Create your new Account</h3>
            <p>With our fast account creation system you can <br /> create your account in just a few minutes <a
                        href="login.php">login here</a></p>

            <!-- Form fields -->
            <div class="form-fields">
                <form action="control/register.php" class="login-form" method="post" enctype="multipart/form-data">
                    <input type="text" placeholder="Surname..."   required name="sname" class="input">
                    <input type="text" placeholder="full name..." name="full_name"  required class="input">
                    <input type="email" placeholder="Email..."   required class="input email" name="email">
                    <input type="tel" placeholder="Phone number..."   required class="input" name="tel">
                    <input type="password" placeholder="Password..."   required class="input" name="password">
                    <div class="input">
                        <label for="male"><input type="radio" name="gender" id="male" value="male">Male</label>
                        <label for="female"><input type="radio" name="gender" id="female" value="female">Female</label>
                    </div>
                    <select name="place">
                        <option value="...">Select your Location</option>
                        <option value="Buea">Buea</option>
                        <option value="limbe">Limbe</option>
                        <option value="Moyuka">Moyuka</option>
                        <option value="Douala">Douala</option>
                        <option value="Yaounde">Yaounde</option>
                        <option value="Adamaua">Adamaua</option>
                    </select>
                    <input type="file" name="profilepic" id="profilepic">
                    <label for="remember-me">
                        <input type="checkbox" name="remember-me" value="true" id="remember-me">Remember me?</label>
                    <?php
                    echo $submit;
                    ?>

                </form>
            </div>
            <!-- /Form fields -->


        </div> <div class="form-container"><p class="notice"></p></div>

    </div>
    <!--/Main Page Div Overlay -->






</div>
<!-- Main Page Div -->
</body>
</html>
