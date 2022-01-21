<?php 
    //Start Session
    session_start();
     

   //constant, value
    define('SITEURL', 'http://localhost/2/');
    define('LOCALHOST', 'localhost:3325');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', "");
    define('DB_NAME', 'food-order');
    
    $conn = mysqli_connect('localhost:3325', 'root', "") or die (mysqli_error()); //db connect
    $db_select = mysqli_select_db($conn,'food-order') or die (mysqli_error()); //select db

?>
