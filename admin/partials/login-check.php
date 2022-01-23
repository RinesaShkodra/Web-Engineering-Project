<?php
//Access control

 //to check whether the user is loged in or not
 if(!isset($_SESSION['user'])){
    //the user is not logged in. Redirect to the login page

    $_SESSION['no-login-message']="<div class='error text-center'>Please login to access Admin Panel</div>";
    header('location:'.SITEURL.'admin/login.php');


 }
 
?>
