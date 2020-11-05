<?php
require_once "config.php";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="device-width, initial-scale=1.0" />
    <title>Login To Dashboard | Standec Group Affiliates</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
<!-- Main Page Div -->
<div class="main-page" id="main-page">
    <!--Main Page Div Overlay -->
    <div class="main-page-overlay" id="main-page-overlay">

        <div class="form-container">
            <h3>Welcome Back, Login</h3>
            <p>Don't have an account yet? <a href="signin.php">Create one</a></p>

            <!-- Form fields -->
            <div class="form-fields">
                <form action="control/login.php" class="login-form" method="post">
                    <input type="email" placeholder="Enter email..." required name='email' class="input">
                    <input type="password" placeholder="Enter Password..."  required name="password" class="input">
                    <label for="remember-me">
                        <input type="checkbox" name="remember-me" value="true" id="remember-me">Remember me?</label>
                    <input type="submit" name="login" value="Goto Dashboard">

                </form>
            </div>
            <!-- /Form fields -->


        </div>

    </div>
    <!--/Main Page Div Overlay -->






</div>
<!-- Main Page Div -->
</body>
</html>
