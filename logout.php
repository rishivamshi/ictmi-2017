<?php
session_start();

// destroy cookies and sessions


unset($_SESSION['SESS_MEMBER_ID']);
unset($_SESSION['SESS_USER_NAME']);
session_destroy();

setcookie("userloggedin", "");

//redirect
header( 'Location: login.php' ) ;

?>