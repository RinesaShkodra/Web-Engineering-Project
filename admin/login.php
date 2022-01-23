<?php include('../config/constants.php'); ?>

<html>
    <head>
        <title>Login - Food Order System</title>
        <link rel="stylesheet" href="../css/admin.css">
    <head>

    <body>
        <div class="login">
            <h1 class="text-center">Login</h1> 
            <br><br>

            <?php
               if(isset($_SESSION['login'])){

                   echo  $_SESSION['login'];
                   unset ($_SESSION['login']);
               }
               if(isset($_SESSION['no-login-message'])){
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
               }
             
            ?>
            <br><br>

            <!-- Login Form-->
            <form action="" method="POST" class="text-center"> 
                Username: <br>
                <input type="text" name="username" placeholder="Enter Username"> <br><br>
                Password: <br>
                <input type="password" name="password" placeholder="Enter Password"><br><br>

                <input type="submit" name="submit" value="Login" class="btn-primary"> 
                <br><br>
            </form>

            <p class="text-center"> Created by <a href=""> Bleona & Rinesa </a></p>

        </div>
    </body>
<html>

<?php
   
   //check whether the submit button is clicked or not
   if(isset($_POST['submit'])){

    //to get the data from Login Form
     $username= $_POST['username'];
     $password= md5($_POST['password']);

    //SQL to check if the user with username and password exists
    $sql= "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

    //execute the query
    $res = mysqli_query($conn, $sql);

    //counting rows to check whether the user exists or not
    $count= mysqli_num_rows($res);
 
    if($count==1)
    {
        //if it is login success
        $_SESSION['login'] ="<div class='success'>Login Successful.</div>";

        //to check whether the user is logged in or not and logout will unset it
        $_SESSION['user'] = $username;
       
        //redirect to home page/dashboard
        header('location:'.SITEURL.'admin/index.php');
        

    }
    else
    {
        //if it is login fail
        $_SESSION['login'] ="<div class='error' text-center> Username or password did not match </div>";
        //redirect to home page/dashboard
        header("location:".SITEURL.'admin/login.php');

    }
    }
?>
