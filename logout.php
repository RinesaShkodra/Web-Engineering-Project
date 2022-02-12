<?php include('config/constants.php');?>

<?php


//destory the session
session_destroy(); //Unsets $_SESSION['user']

//redirect to login page
header('location:'.SITEURL.'login.php');

?>