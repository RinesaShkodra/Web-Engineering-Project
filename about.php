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
                            <a href="order.html">Order</a>
                        </div>
                        </div>
                        <li class="register"><a href="register.html">Register</a></li>
                        <li class="login"><a href="login.html">Log In</a></li>
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
            <!--Slideri *******-->
            <h2 style="text-align:center"> Our Top Recipes!</h2>
            <div class="container-slider2">
                <div class="slides">
                    <div class="tesktiPerNr"> 1 / 6</div>
                    <img src="sliderimages/recipe1.jpg">

                </div>

                <div class="slides">
                    <div class="tesktiPerNr"> 2 / 6</div> 
                    <img src="sliderimages/recipe2.jpg">>

                </div>

                <div class="slides">
                    <div class="tesktiPerNr"> 3 / 6</div>
                    <img src="sliderimages/recipe3.jpg">

                </div>

                <div class="slides">
                    <div class="tesktiPerNr"> 4 / 6</div>
                    <img src="sliderimages/recipe4.jpg">

                </div>

                <div class="slides">
                    <div class="tesktiPerNr"> 5 / 6</div>
                    <img src="sliderimages/recipe5.jpg">

                </div>

                <div class="slides">
                    <div class="tesktiPerNr"> 6 / 6</div>
                    <img src="sliderimages/recipe6.jpg">

                </div>
                <div class="caption-container">
                    <p id="caption-s"></p>
                </div>

                <div class="rreshti">

                    <div class="kolona">
                        <img class="kursori" src="sliderimages/recipe1.jpg" style="width: 100%;" onclick="currentSlide(1)" alt="recipe1"> 
                    </div>
                    <div class="kolona">
                        <img class="kursori" src="sliderimages/recipe2.jpg" style="width: 100%;" onclick="currentSlide(2)" alt="recipe2"> 
                    </div>
                    <div class="kolona">
                        <img class="kursori" src="sliderimages/recipe3.jpg" style="width: 100%;" onclick="currentSlide(3)" alt="recipe3"> 
                    </div>
                    <div class="kolona">
                        <img class="kursori" src="sliderimages/recipe4.jpg" style="width: 100%;" onclick="currentSlide(4)" alt="recipe4"> 
                    </div>
                    <div class="kolona">
                        <img class="kursori" src="sliderimages/recipe5.jpg" style="width: 100%;" onclick="currentSlide(5)" alt="recipe5"> 
                    </div>
                    <div class="kolona">
                        <img class="kursori" src="sliderimages/recipe6.jpg" style="width: 100%;" onclick="currentSlide(6)" alt="recipe6"> 
                    </div>
                </div>
            </div>
            <!-- javaScript per sliderin 2-->
            <script>
                var indexOfSlide=1;
                shfaqSlides(indexOfSlide);

                function plusSlides(n) {
                shfaqSlides(indexOfSlide += n);
                }
                function currentSlide(n) {
                shfaqSlides(indexOfSlide = n);
                }
            
                function shfaqSlides(n){
                    var i;
                    var slides = document.getElementsByClassName("slides");
                    var dots = document.getElementsByClassName("kursori");
                    var captionText = document.getElementById("caption");
                    if (n > slides.length) {indexOfSlide = 1}
                    if (n < 1) {indexOfSlide= slides.length}
                    for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[indexOfSlide-1].style.display = "block";
                    dots[indexOfSlide-1].className += " active";
                    captionText.innerHTML = dots[indexOfSlide-1].alt;

                }
            </script>

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
