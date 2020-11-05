<?php
// for Email
function emailValidation($conn, $email, $inputStyle)
{
    $select = "SELECT email FROM users WHERE email ='$email'";
    $result = $conn->query($select);
    if ($result->num_rows > 0)
    {
        echo "<script>$(window).ready(function($) {
          $('.$inputStyle').css('border','2px solid deeppink');
        });
        $('input.btn-submit').attr('disabled','disabled')</script>";
        echo "<span style='color: red; font-weight: bolder;'>$email</span> is unavailable.";
    }
    else
    {
        echo "<script>$(window).ready(function($) {
          $('.$inputStyle').css({'border-top':'none','border-left':'none','border-right':'none','border-bottom':'#eaeaea solid 2px;'});
          $('< .$inputStyle').css('background', 'forestgreen');
        });
        $('input.btn-submit').removeAttr('disabled')</script>";
        echo "<span style='color: forestgreen; font-weight: bolder;'>$email</span> is available.";
    }
}

// Prepare Input for sql
function fixer($data )
{
    $data = htmlentities( $data );
    $data = stripslashes( $data );
    $data = trim( $data);

    return $data;
}

// test whether user is on the database
function loginChecker($conn, $email, $password)//Passing the database connection, email and password for comparison.
{
    $query = "select email FROM users WHERE (email='$email' AND password='$password')";
    $rel   = $conn->query( $query );
    if($rel->num_rows > 0)
    {
        $_SESSION["userID"] = $email;
        return 1; //Return boolean true value
    }
    else
    {
        return 0; // return boolean false value

    }

}

function userScanner($conn)
{
    return $conn->query("Select username, fullname, email, phone, online FROM users ORDER BY online DESC ");
}


