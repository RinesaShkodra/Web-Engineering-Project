<?php include('config/constants.php');?>
<!DOCTYPE html>
<html>
    <head>
        <title>Order Form</title>
        <link href="CSS/orderform.css" rel="stylesheet" />
    </head>

    <body>
        <header>
            <nav>
                <ul style="width:100vw;">
                    <li class="home"><a href="<?php echo SITEURL; ?>index.php" > Home</a></li>
                    <li class="about"><a href="<?php echo SITEURL; ?>about.php">About</a></li>
                    <div class="dropdown">
                        <button class="dropbtn"> Order Info</button>
                        <div class="dropdown-content">
                            <a href="<?php echo SITEURL; ?>foods.php">Foods</a>
                            <a href=" <?php echo SITEURL; ?>categories.php"> Categories</a>
                            <a href="order.php">Order</a>
                        </div>
                        </div>
                        <li class="register"><a href="register.php">Register</a></li>
                        <li class="login"><a href="login.php">Log In</a></li>
                        <li class="register"><a href="logout.php">Log Out</a></li>
                    </div>
                </ul>
            </nav>
        </header>
        <hr>
    
       <?php
        // is the food set or not
       if(isset($_GET['food_id']))
       {
           //Get food details 
           $food_id = $_GET['food_id'];
           $sql = "SELECT * FROM tbl_food WHERE id=$food_id";
           $res = mysqli_query($conn, $sql);
           //Count rows
           $count = mysqli_num_rows($res);

           if($count==1)
           {
               
               //if true get from db
               $row = mysqli_fetch_assoc($res);

               $title = $row['title'];
               $price = $row['price'];
               $image_name = $row['image_name'];
           }
           else
           {
               //false return to home page
               header('location:'.SITEURL);
           }
       }
       else
       {
           //Redirect to homepage
           header('location:'.SITEURL);
       }



       ?>

        <section class="backround">
            <div class="container">
           <h2 class="text-center text-white">Fill this form to confirm your order.</h2>
           <form action="" method="POST" class="order">
           <fieldset>
            <legend>Selected Food</legend>
            <div class="food-menu-img">
                <?php 
                
                    //check if image is available
                    if($image_name=="")
                    {
                        //Image not Availabe
                        echo "<div class='error'>Image not Available.</div>";
                    }
                    else
                    {
                        //Image is Available
                        ?>
                        <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                        <?php
                    }
                
                ?>
                
            </div>

            <div class="food-menu-desc">
                <h3><?php echo $title; ?></h3>
                <input type="hidden" name="food" value="<?php echo $title; ?>">

                <p class="food-price">$<?php echo $price; ?></p>
                <input type="hidden" name="price" value="<?php echo $price; ?>">

                <div class="order-label">Quantity</div>
                <input type="number" name="qty" class="input-responsive" value="1" required>
                
            </div>

    
                    </fieldset>
                    
                    <fieldset>
                        <legend>Delivery Details</legend>
                        <div class="order-label">Full Name</div>
                        <input type="text" name="full-name" placeholder="Full Name" class="input-responsive" required id="name-input">
                        <label  id="name-label" style="color: rgb(236, 79, 106);"></label>
                        <br> <br>
    
                        <div class="order-label">Phone Number</div>
                        <input type="tel" name="contact" placeholder="Ex. 1234xxxxxx" class="input-responsive" required id="telephone">
                        <label  id="phone-label" style="color: rgb(236, 79, 106);"></label>
                        <br> <br>
    
                        <div class="order-label">Email</div>
                        <input type="email" name="email" placeholder="Ex. example@gmail.com" class="input-responsive" required id="email">
                        <label  id="email-label" style="color: rgb(236, 79, 106);"></label>
                        <br> <br>
    
                        <div class="order-label">Address</div>
                        <textarea name="address" rows="10" placeholder="Ex. Street, City, Country" class="input-responsive" required id="address"></textarea>
                        <label  id="address-label" style="color: rgb(236, 79, 106);"></label>
                        <br> <br>

                        <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary" id="submit">
                    </fieldset>
    
                </form>
    
            </div>
        </section>


        <?php
               //CHeck whether submit button is clicked or not
               if(isset($_POST['submit']))
               {
                   // Get all the details from the form

                   $food = $_POST['food'];
                   $price = $_POST['price'];
                   $qty = $_POST['qty'];

                   $total = $price * $qty; // total = price x qty 

                   $order_date = date("Y-m-d h:i:sa"); //Order DAte

                   $status = "Ordered";  // Ordered, On Delivery, Delivered, Cancelled

                   $costumer_name = $_POST['full-name'];
                   $costumer_contact = $_POST['contact'];
                   $costumer_email = $_POST['email'];
                   $costumer_address = $_POST['address'];


                   //Save the Order in Databaase
                   //Create SQL to save the data
                   $sql2 = "INSERT INTO tbl_order SET 
                       food = '$food',
                       price = $price,
                       qty = $qty,
                       total = $total,
                       order_date = '$order_date',
                       status = '$status',
                       costumer_name = '$costumer_name',
                       costumer_contact = '$costumer_contact',
                       costumer_email = '$costumer_email',
                       costumer_address = '$costumer_address'
                   ";

                   //echo $sql2; die();
                   $conn = mysqli_connect('localhost', 'root', "") or die (mysqli_error()); //db connect
                   $db_select = mysqli_select_db($conn,'food-order') or die (mysqli_error()); //select db
                   //Execute the Query
                   $res2 = mysqli_query ($conn, $sql2);

                   //Check whether query executed successfully or not
                   if($res2==true)
                   {
                       //Query Executed and Order Saved
                       $_SESSION['order'] = "<div class='success text-center'>Food Ordered Successfully.</div>";
                       header('location:'.SITEURL);
                   }
                   else
                   {
                       //Failed to Save Order
                       $_SESSION['order'] = "<div class='error text-center'>Failed to Order Food.</div>";
                       header('location:'.SITEURL);
                   }

               }

                
                ?>
            


        <script>
            var submit= document.getElementById("submit");
            submit.addEventListener("click",function(event){ 
                 //validimi per Full Name
                 var nameValid= /^[A-Za-z]{2,9}/;
                var name12=document.getElementById("name-input").value;
                var nameLabel= document.getElementById("name-label")

                if(name12 == ""){
                nameLabel.innerHTML="Please fill the Full Name field!";
                event.preventDefault();

                }
                else{
                    if(nameValid.test(name12 ) == true){

                    }
                    else{
                        nameLabel.innerHTML="Error";
                        event.preventDefault();
                    }

                }  
                //validimi per Phone Number
                var telValid=/^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/;
                var tel12=document.getElementById("telephone").value;
                var telLabel=document.getElementById("phone-label")

                if(tel12 == ""){
                telLabel.innerHTML="Please fill the Phone Number field!";
                event.preventDefault();

                }
                else if(isNaN(tel12)){
                    telLabel.innerHTML="Only numbers are allowed!";
                    event.preventDefault();
                }
                else if(tel12.length < 9){
                    telLabel.innerHTML="Phone Number must be 9 digit!";
                    event.preventDefault();
                }

                else{
                    if(telValid.test(tel12 ) == true){

                    }
                    else{
                        telLabel.innerHTML="Error";
                        event.preventDefault();
                    }

                }
                //*validimi per Email
                var emailValid= /^[A-Za-z]+[._-]?\w+[+]?[A-Za-z]+@[A-Za-z]+[-]?[A-Za-z]+\.[A-Za-z]{2,3}/;;
                var email12= document.getElementById("email").value;
                var emailLabel=document.getElementById("email-label")

                if(email12 == ""){
                emailLabel.innerHTML="Please fill the Email field!";
                event.preventDefault();

                }
                else{
                    if(emailValid.test(email12 ) == true){

                    }
                    else{
                        emailLabel.innerHTML="Error";
                        event.preventDefault();
                    }

                }
                //validimi per Address
                var addressValid= /^[A-Za-z]{1,60}/;
                var address12=document.getElementById("address").value;
                var addressLabel=document.getElementById("address-label");


                if(address12 == ""){
                addressLabel.innerHTML="Please fill the Comment field!";
                event.preventDefault();

                }

            })
        </script>



    </body>
</html>
