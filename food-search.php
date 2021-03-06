<?php include('config/constants.php');?>
<!DOCTYPE html>
<html>
    <head>
        <title>Foods</title>
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
                            <a href="order.html">Order</a>
                            </div>
                        </div>
                    <li class="register"><a href="register.html">Register</a></li>
                    <li class="register"><a href="login.html">Log In</a></li>
                    <li class="register"><a href="logout.php">Log Out</a></li>
                </ul>
            </nav>
        </header>


            <div class="clearfix"></div>
        </div> 
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD search Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">

            <?php
                //get the search keyword 
                $search = $_POST['search'];
            
            ?>
            
            <h2>Foods on Your Search <a href="#" class="text-white">"<?php echo $search; ?>"</a></h2>

        </div>
    </section>
    <!-- fOOD search Section Ends Here -->



    <!-- fOOD Menu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <?php 

        
                //query to get the food based on search keywords

                $sql =" SELECT * FROM tbl_food WHERE title LIKE '%$search%' OR description LIKE '%$search%'";

                $res= mysqli_query($conn, $sql);


                $count=mysqli_num_rows($res);
                //check if the food is available 
                if($count > 0){
 
                    while($row = mysqli_fetch_assoc($res)){
                        //get the values
                        $id =$row['id'];
                        $title = $row['title'];
                        $description = $row['description'];
                        $price = $row['price'];
                        $image_name= $row['image_name'];
                        ?>
                                       
                        <div class="food-menu-box">
                                <div class="food-menu-img">
                                <?php
                                   //check if the image is available or not
                                if($image_name==""){
                                    echo "<div class= 'error'>Image not Available!</div>";

                                }
                                else{
                                ?>
                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">

                                <?php
                                }

                            ?>
                    
                        </div>
                                <div class="food-menu-desc">
                            <h4><?php echo $title; ?></h4>
                            <p class="food-price"><?php echo $price; ?></p>
                            <p class="food-detail">
                             <?php echo $description; ?>
                            </p>
                            <br>

                            <a href="#" class="btn btn-primary">Order Now</a>
                           </div>
                        </div>
                            




                       <?php
                    }

                }
                else{
                    echo "<div class= 'error'> Food not found! </div>";
                }

            
            
            ?>


            <div class="clearfix"></div>

            

        </div>

    </section>
   

  
    <div>
        <br><br>
                     <h6 style="text-align: center; ">FIND US ON SOCIAL MEDIA<h6> <br><br>
                        <div class="center">
                            <a href="https://www.facebook.com/" target="_blank"><img src="images/fb_original.jpg" alt="facebook" /></a>
                            <a href="https:/www.instagram.com/" target="_blank"><img src="images/insta.jpg" alt="instagram" /></a>
                            <h5 style="text-align: center; ">Facebook             |         Instagram<h5>
                </div>
            </footer>
    </div>

</body>
</html>