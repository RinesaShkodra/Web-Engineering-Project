<?php include('config/constants.php');?>
<!DOCTYPE html>
<html>
    <head>
        <title>About Us</title>
        <link href="CSS/style.css" rel="stylesheet">
    </head>

    <body>
        <header>
            <nav>
                <ul style="width:100vw;">
                    <li class="home"> <a href="<?php echo SITEURL; ?>index.php"> Home</a></li>
                    <li class="about"><a class="active" href="<?php echo SITEURL;?>about.php">About</a></li>
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
        <div class="relative">
            <div class="relative">
                <img src="images/aboutus.jpg" style="width:100vw">
        </div>
        <br>
        <br>
        <br>
        <br>

        <div id="container" style="width: 100vw;">
            <h1> <i>About Us</i></h1>
           <p> At Taste of Rome, we believe in the emotional power of food. 
            For many of us, food is a language of love. <br> It's more than just nourishment. It's memories, it's connection, it's comfort.
            <br>We believe that food brings people together, so we've created a place that connects people with their greatest food memories.<br>
            <hr>
           
            <br>
            <br>
            <br>

            <h3 style="text-align: center;">Our Location</h3>
            <p style="text-align: center;">  We have a beautiful view with a low-key waterfront space with outdoor tables & free WiFi.<br>
                With access to Outdoor seating, 
                
                Curbside pickup,
                
                Delivery,
                
                Takeout,
                
                Dine-in! </p>
            <div class="mapi">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3150.0706762885966!2d-122.48531768482326!3d37.85863667974432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808584504bee0e1b%3A0xbc1bdd4883d6dd48!2sTaste%20of%20Rome!5e0!3m2!1sen!2s!4v1639682113931!5m2!1sen!2s"
                 width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <br>
        <hr />

        <footer>
             <h6 style="text-align: center; ">FIND US ON SOCIAL MEDIA<h6>
            <div class="center">
                <a href="https://www.facebook.com/" target="_blank"><img src="images/fb_original.jpg" alt="facebook" /></a>
                <a href="https:/www.instagram.com/" target="_blank"><img src="images/insta.jpg" alt="instagram" /></a>
                <h5 style="text-align: center; ">Facebook           |        Instagram<h5>
            </div>
            
        </footer>
    </body>
</html>

