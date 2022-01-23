<?php 
    //Start Session
    session_start();
     

   //constant, value
    define('SITEURL', 'http://localhost/2/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', "");
    define('DB_NAME', 'food-order');
    
    $conn = mysqli_connect('localhost', 'root', "") or die (mysqli_error()); //db connect
    $db_select = mysqli_select_db($conn,'food-order') or die (mysqli_error()); //select db

?>
