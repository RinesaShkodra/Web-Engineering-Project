<?php include('config/constants.php');?>
<?php  
//check whether the id is passed or not
    if(isset($_GET['category_id'])){

        //category is set and get the id
        $category_id = $_GET['category_id'];

        //get the category title based on category id
        $sql = "SELECT title FROM tbl_category WHERE id=$category_id";

        //execute the query
        $res = mysqli_query($conn, $sql);

        //get the value from database
        $row = mysqli_fetch_assoc($res);
        //get the title
        $category_title =$row['title'];


    }
    else{
        //category not passed
        //redirect to home page
        header('location:'.SITEURL.'categories.php');
    }


?>



<!DOCTYPE html>
<html>
    <head>
        <title>category-foods</title>
        <link href="CSS/orderstyle.css" rel="stylesheet" />
    </head>

    <body>
        <header>
            <nav>
                <ul>
                    <li class="home"> <a href="<?php echo SITEURL; ?>index.php" >  Home</a></li>
                    <li class="about"><a href="<?php echo SITEURL; ?>about.php">About</a></li>
                    <div class="dropdown">
                        <button class="dropbtn"><a class="active" href="Pizza.html"></a>Order Info</button>
                        <div class="dropdown-content">
                            <a href="<?php echo SITEURL; ?>foods.php">Foods</a>
                            <a href=" <?php echo SITEURL; ?>categories.php"> Categories</a>
                            <a href="Order.html">Order</a>
                            </div>
                        </div>
                    <li class="register"><a href="register.php">Register</a></li>
                    <li class="register"><a href="login.php">Log In</a></li>
                    <li class="register"><a href="logout.php">Log Out</a></li>
                </ul>
            </nav>
        </header>

        
        <div class="clearfix"></div>
    </div>
</section>


<section class="food-search text-center">
    <div class="container">
        
        <h2>Foods on <a href="#" class="text-white">"<?php echo $category_title; ?>"</a></h2>

    </div>
</section>

       
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>
            <?php
            //create query to get foods based on selected category
            $sql2= "SELECT * FROM tbl_food WHERE category_id = $category_id";

            $res2 = mysqli_query($conn, $sql2);

            //count the rows
            $count2 = mysqli_num_rows($res2);


            //check whether food is available or not
            if($count2 > 0){

                while($row2 =mysqli_fetch_assoc($res2)){
                    $id = $row2['id'];
                    $title = $row2['title'];
                    $price = $row2['price'];
                    $description = $row2['description'];
                    $image_name = $row2['image_name'];
                    ?>

                   <div class="food-menu-box">
                      <div class="food-menu-img">
                        <?php
                            if($image_name == ""){

                                echo "<div class = 'error'>Image Not Available </div>";
                            }
                            else{
                                //image available
                                ?>
                                    <img src="<?php echo SITEURL;?>images/food/<?php echo $image_name ;?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">

                                <?php
                            }
 
                        ?>

                      </div>

                       <div class="food-menu-desc">
                       <h4><?php echo $title ;?></h4>
                        <p class="food-price"><?php echo $price; ?></p>
                        <p class="food-detail">
                            <?php echo $description; ?>
                         </p>
                         <br>

                         <a href="<?php echo SITEURL;?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                          </div>
                    </div>
                    <?php

                }


            }
            else{
                echo "<div class ='error'>Food Not Available !</div>";
            }
            
            
            
            
            ?>

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->


       


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

