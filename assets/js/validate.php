<?php
require "../../config.php";
require "../../functions/all.php";
if(isset($_GET['email']))
{
    $email = fixer($_GET['email']);
    $target= fixer($_GET['target']);
    emailValidation($conn, $email, $target);

}
