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
                        <li class="register"><a href="register.html">Register</a></li>
                        <li class="login"><a href="login.html">Log In</a></li>
                    </div>
                </ul>
            </nav>
        </header>

        <hr>
        <section class="backround">
            <div class="container">
                
                <h2 class="text-center text-white">Fill this form to confirm your order.</h2>
    
                <form action="#" class="order">
                    <fieldset>
                        <legend>Selected Food</legend>
    
                        <div class="food-menu-img">
                            <img src="images/menu-pizza.jpg" alt="Chicken Pizza" class="img-responsive img-curve">
                        </div>
        
                        <div class="food-menu-desc">
                            <h3>Food Title</h3>
                            <p class="food-price">$2.3</p>
    
                            <div class="order-label">Quantity</div>
                            <input type="number" name="qty" class="input-responsive" value="1" min="1" required >

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
