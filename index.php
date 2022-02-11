<?php include('config/constants.php');?>

<!DOCTYPE html>
<html>
    <head>
        <title>About Us</title>
        <link href="CSS/style.css" rel="stylesheet" />
    </head>

    <body>
        <header>
            
            <nav>
                <ul style="width:100vw;">
                    <li class="home"><a class="active" href="<?php echo SITEURL;?>index.php" > Home</a></li>
                    <li class="about"><a href="<?php echo SITEURL;?>about.php">About</a></li>
                    <div class="dropdown">
                        <button class="dropbtn">Order Info</button>
                        <div class="dropdown-content">
                            <a href="<?php echo SITEURL; ?>foods.php">Foods</a>
                            <a href=" <?php echo SITEURL; ?>categories.php"> Categories</a>
                            <a href="order.html">Order</a>
                        </div>
                      </div>
                        <li class="register"><a href="register.html">Register</a></li>
                        <li class="register"><a href="login.html">Log In</a></li>
                    </div>
                </ul>
            </nav>
        </header>
            <div class="relative">
                <img src="images/theme.jpg" style="width:100vw">
            <p class="absolute-text" style="width:100vw"><i><b>  We Are Professional At It's Finest!</b></i></p>
        </div>
        <br>
        <br>
        <br>
        <div id="container" style="width: 100vw;">
        <h3><i>Meet our team</i></h3>
             <br>
          <div class="slideshow-container" style="width: 100vw;">
          
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="images/chef2.jpg">
            <div class="text">Chef Darryl</div>
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="images/chef1.jpg">
            <div class="text">Chef Lana</div>
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="images/chef3.jpg">
            <div class="text">Chef Diana</div>
          </div>
          
          </div>
          <br>
          
          <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
          </div>
          
          <script>
          var slideIndex = 0;
          showSlides();
          
          function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 3000); // every 3 secs
          }
          </script>
        <br>
        <br>
        <br>
        <br>
        <h2><i>Meet Our Funders, and see what they have to say about our team!</i></h2>
        <br>
        <hr>
        <div class="testimony">
        <div class="box1">
          <img src="images/profile1.png" id="testimonypic" >
          <h2>Mike MacDonald</h2>
          <p> Founder of Taste Of Rome</p>
          <p id="testimonyText" >"Our team does an amazing job.<br>
           Would highly recommend."</p>
          </div>
          <div class="box2">
            <img src="images/profile2.png" id="testimonypic">
          <h2>Richard Kim</h2>
          <p>CEO of Taste Of Rome</p>
          <p id="testimonyText">"The way the Mike approached to my idea was amazing.
             Thank you team!"</p>
          </div>
          <div class="box3">
            <img src="images/profile3.png" id="testimonypic">
            <h2>Sabina Sebastian</h2>
            <p>Co-Founder of Taste Of Rome</p>
            <p id="testimonyText">"This team is very professional.<br>
               Fast, creative, and flexible."
             </p>
          </div>
          </div>
            <hr>
             <br>
            <footer>
                <h6 style="text-align: center; ">FIND US ON SOCIAL MEDIA<h6>
            <div class="center">
                <a href="https://www.facebook.com/" target="_blank"><img src="images/fb_original.jpg" alt="facebook" /></a>
                <a href="https:/www.instagram.com/" target="_blank"><img src="images/insta.jpg" alt="instagram" /></a>
                <h5 style="text-align: center; ">Facebook           |           Instagram<h5>
                </div>
            </footer>
        </div>
    </body>
</html>
