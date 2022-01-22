<?php   
include('../config/constants.php');
//  process the data to delete them and redirect

// get the id of admin to be deleted
$id = $_GET['id'];

//sql query to delete admin
$sql = "DELETE FROM tbl_admin WHERE id = $id";

//execute the query 
$res = mysqli_query($conn,$sql);

//check if the query is executed right
if($res==true)
{
    //echo "admin deleted";
    $_SESSION['delete'] = "<div class='success'> Admin Deleted Successfully.</div>";
    header('location:'.SITEURL.'admin/manage-admin.php');
}

else {
    //echo "failed";
    $_SESSION['delete'] = "<div class='error'> Failed to Delete Admin. Try Again.</div>";
    header('location:'.SITEURL.'admin/manage-admin.php');

}
//redirect to manage-admin with a message success or error






?>
