<?php include('partials/menu.php');?>

<html>
    <div class="main-content">
        <div class="wrapper">
            <h1>Add Category</h1>

            <br><br>
            <?php
                if(isset($_SESSION['add'])){
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }
                if(isset($_SESSION['upload'])){
                    echo $_SESSION['upload'];
                    unset($_SESSION['upload']);
                }
            
            ?>
            <br><br>

            <!--Add Category form-->

            <form action="" method="POST" enctype="multipart/form-data"> 

                <table class="tbl-30">
                    <tr>
                        <td>Title: </td>
                        <td>
                            <input type="text" name="title" placeholder="Category Title">
                        </td>
                    </tr>
                    <tr>
                        <td>Select Image: </td>
                        <td><input type="file" name="image"></td> 
                    </tr>
                    <tr>
                        <td>Featured: </td>
                        <td>                               <!--value sherben per db-->
                            <input type="radio" name="featured" value="Yes"> Yes
                            <input type="radio" name="featured" value="No"> No
                        </td>
                    </tr>
                    <tr>
                        <td>Active: </td>
                        <td>
                            <input type="radio" name="active" value="Yes"> Yes
                            <input type="radio" name="active" value="No"> No
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Category" class="btn-secondary">
                        </td>
                    </tr>

                </table>
            </form>

            <?php
            //check whether the Submit Button is Clicked or Not
            if(isset($_POST['submit'])){
                //echo "Clicked";

                //to get the value from category form
                $title= $_POST['title'];

                //for radio input type checking if the button is clicked
                if(isset($_POST['featured'])){
                    //get the value 
                    $featured=$_POST['featured'];
                }
                else{
                    //set by default "no"
                    $featured="No";
                }

                if(isset($_POST['active'])){
                    //get the value
                    $active=$_POST['active'];
                }
                else{
                    //set by default "no"
                    $active="No";
                    
                }
                //kontorollojme nese eshte bere select img
                if(isset($_FILES['image']['name'])){
                    //per me bo upload img duhet image name, source path dhe destination path
                
                    $image_name = $_FILES['image']['name'];

                    //upload the image only if image is selected
                    if($image_name != ""){

                    

                    // get the extension (jpg, png, gif)
                    $ext = end(explode('.', $image_name));

                    //auto rename the image,
                    $image_name = "Food_Category_".rand(000,999).'.'.$ext;



                    $source_path=$_FILES['image']['tmp_name'];
                    $destination_path="../images/category/". $image_name;

                    //upload
                    $upload= move_uploaded_file($source_path, $destination_path);

                    //check if the img is uploaded
                    if($upload==false){
                        $_SESSION['upload']="<div class='error'>Failed to Upload Image</div>";
                        header('location:'.SITEURL.'admin/add-category.php');
                        //nese nuk behet upload, nuk i marrim te dhenat
                        die();
                    }

                    }

                }
                else{
                    //dont upload img an set the image_name as blank
                    $image_name="";
                }


                //create sql query per me bo insert category ne databaze
                $sql = "INSERT INTO tbl_category SET
                    title='$title',
                    image_name='$image_name',
                    featured='$featured',
                    active='$active'
                ";
                //execute query-in dhe save ne databaze
                $res= mysqli_query($conn, $sql);

                //kontrollojme a eshte execute query dhe a eshte shtuar te dhenat
                if($res==true){
                    //po
                    $_SESSION['add']="<div class='success'> Category Added Successfully</div>";
                    header('location:'.SITEURL.'admin/manage-category.php');
                }
                else{
                   // failed
                   $_SESSION['add']="<div class='error'> Failed to Add Category </div>";
                    header('location:'.SITEURL.'admin/add-category.php');
                }

            }
            
            ?>
        </div>
    </div>

</html>


<?php include('partials/footer.php');?>