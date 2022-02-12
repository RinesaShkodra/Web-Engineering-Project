<?php   
include('../config/constants.php');

// get the id of admin to be deleted
$id = $_GET['id'];

//sql query to delete admin
$sql = "DELETE FROM users WHERE id = $id";

//execute the query 
$res = mysqli_query($conn,$sql);

//check if the query is executed right
if($res==true)
{
    //echo "admin deleted";
    $_SESSION['delete'] = "<div class='success'> User Deleted Successfully.</div>";
    header('location:'.SITEURL.'admin/manage-user.php');
}

else {
    //echo "failed";
    $_SESSION['delete'] = "<div class='error'> Failed to Delete User. Try Again.</div>";
    header('location:'.SITEURL.'admin/manage-user.php');

}
//redirect to manage-admin with a message success or error






?>