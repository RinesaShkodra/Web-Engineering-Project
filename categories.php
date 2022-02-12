<?php include('config/constants.php');?>
<!DOCTYPE html>
<html>
    <head>
        <title>Categories</title>
        <link href="CSS/orderstyle.css" rel="stylesheet" />
    </head>

    <body>
        <header>
            <nav>
                <ul>
                    <li class="home"><a href="<?php echo SITEURL; ?>index.php" >   Home</a></li>
                    <li class="about"><a href="<?php echo SITEURL; ?>about.php">About</a></li>
                    <div class="dropdown">
                        <button class="dropbtn"><a class="active"></a>Order Info</button>
                        <div class="dropdown-content">
                            <a href="<?php echo SITEURL; ?>foods.php">Foods</a>
                            <a href=" <?php echo SITEURL; ?>categories.php"> Categories</a>
                            <a href="order.php">Order</a>
                            </div>
                        </div>
                    <li class="register"><a href="register.html">Register</a></li>
                    <li class="register"><a href="login.html">Log In</a></li>
                </ul>
            </nav>
        </header>

        
        <div class="clearfix"></div>
    </div>
</section>

<section class="categories">
    <div class="container">
        <h2 class="text-center">Explore Foods</h2>


        <?php 
        //create Query to get the data from database
        $sql = "SELECT * FROM tbl_category WHERE active='Yes'" ;

        $res= mysqli_query($conn, $sql);
        
        //count rows to check if categories are available
        $count = mysqli_num_rows($res);
        
        if($count > 0){

            while($row= mysqli_fetch_assoc($res)){
                //get the values
                $id = $row['id'];
                $title = $row['title'];
                $image_name = $row['image_name'];
                ?>


                 <a href="<?php echo SITEURL;?>category-foods.php?category_id=<?php echo $id; ?>">
                    <div class="box-3 float-container">
                    <?php
                        if($image_name == ""){

                            echo "<div class= 'error'>Image not Available </div>";
                         }
                        else{

                        ?>
                        <img src="<?php echo SITEURL;?>images/category/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve">
                        <?php
                        }
                    ?>
                    

                   <h3 class="float-text text-white"><?php echo $title;?></h3>
                   </div>
                 </a>


             <?php
                 
            }

        }
        else{

            echo "<div class = 'error'>Category not Found!</div>";
        }
        
        ?>

        <div class="clearfix"></div>
    </div>
</section>


       


            <footer>
                <div>
                    <h6 style="text-align: center; ">FIND US ON SOCIAL MEDIA<h6>
                        <div class="center">
                            <a href="https://www.facebook.com/" target="_blank"><img src="images/fb_original.jpg" alt="facebook" /></a>
                            <a href="https:/www.instagram.com/" target="_blank"><img src="images/insta.jpg" alt="instagram" /></a>
                            <h5 style="text-align: center; ">Facebook           |         Instagram<h5>
                </div>
            </footer>
        </div>
    </body>
</html>

