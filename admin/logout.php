<?php

//include constants.php for SITEURL
include('../config/constants.php');

//destory the session
session_destroy(); //Unsets $_SESSION['user']

//redirect to login page
header('location:'.SITEURL.'admin/login.php');

?>