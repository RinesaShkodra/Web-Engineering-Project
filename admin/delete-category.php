<?php
//include concstants file
    include('../config/constants.php');

//check if id and image name values are set

    if(isset($_GET['id']) && isset($_GET['image_name'])){
     //get the value and delete
    
     $id= $_GET['id'];
     $image_name = $_GET['image_name'];

     //remove image if it's available 
        if($image_name != ""){

            $path= "../images/category/".$image_name;

            $remove= unlink($path);
            
            if($remove == false){
                //set a message ans stop the process
                $_SESSION['remove'] = "<div class = 'error'> Failed to remove Category Image.</div>";

                header('location:'.SITEURL.'admin/manage-category.php');

                die();
            }
        }

        //delete the database
        $sql= "DELETE FROM tbl_category WHERE id=$id";

        //execute the query 
        $res = mysqli_query($conn, $sql);

        //check if data was deleted from db
        if($res==true){

            $_SESSION['delete']= "<div class='success'> Category Deleted succesfully</div>";

            header('location:'.SITEURL.'admin/manage-category.php');
        }
        else{

            $_SESSION['delete']= "<div class='error'> Failed to delete category</div>";

            header('location:'.SITEURL.'admin/manage-category.php');


        }



    

    } 
    else{

    //redirect to manage category
    header('location:'.SITEURL.'admin/manage-category.php');

    }   

?>