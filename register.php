<?php include('config/constants.php');?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="register.css">
</head>
<body>
   
<form class="box" action="register.php" method="POST" >

    <h1>  Register  </h1>
    <input type="text" name="username" placeholder="Enter Username" id="username"> 
    <label style="color: red;" id="username-label" ></label> 
    <input type="email" name="email" placeholder="Enter Email" id="email">
    <label style="color: red;" id="email-label"  ></label>
    <input type="password" name="password" placeholder="Enter password" id="password">
    <label style="color: red;" id="pw-label"  ></label>
    <input type="password" name="password2" placeholder="Confirm password" id="password2">
    <label style="color: red;" id="pw2-label" ></label>
    <input type="submit"name="submit" value="Send message" id ="submit" >
    <h4><a href="login.php" style="color: white;">Already have an account? Click here!</a></h4>
</form>

<?php



       
        if(isset($_POST['submit'])){
            //button clicked
            
        
            //get our data from our form
           $username = $_POST['username'];
           $email = $_POST['email'];
           $password = md5( $_POST["password"]); //encryption w md5
           $password2 = md5( $_POST["password2"]);
        
           //SQL QUERY to save the data into the database
           $sql="INSERT INTO users SET
            username='$username',
            email='$email',
            password='$password',
            password2='$password2'

            ";
        
        $conn = mysqli_connect('localhost', 'root', "") or die (mysqli_error()); //db connect
        $db_select = mysqli_select_db($conn,'food-order') or die (mysqli_error()); //select db
        
        
         // execute QUERY and SAVE DATA in db
           $res = mysqli_query ($conn,$sql) or die (mysqli_error());
        
           if($res==true)
           {
              
               //Redirect main page
            
               header('location:'.SITEURL.'index.php');
           }
           else
           {
               header("location:".SITEURL.'register.php');
           }
        }
        
        ?>
        
        <script>
     var submit= document.getElementById("submit");
    submit.addEventListener("click",function(event){

        // validimi per Username:
        var usernameValid= /^[A-Z][a-z]{2,9}/;
        var username12=document.getElementById("username").value;
        var usernameLabel= document.getElementById("username-label")
        if(username12 == ""){
            usernameLabel.innerHTML="Please fill the Username field!";
            event.preventDefault();

            }
            else{
                if(usernameValid.test(username12 ) == true){

                }
                else{
                    usernameLabel.innerHTML="Username should start with an uppercase letter!";
                    event.preventDefault();
                }

            } 
            

                //validimi per email
                var emailValid=/^[A-Za-z]+[._-]?\w+[+]?[A-Za-z]+@[A-Za-z]+[-]?[A-Za-z]+\.[A-Za-z]{2,3}/;
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
                //validimi per password
            var pwValid= /^[a-z]{2,9}/;
            var pw12 = document.getElementById("password").value;
            var pwLabel=document.getElementById("pw-label")

            if(pw12 == ""){
            pwLabel.innerText="Please fill the Password field!";
            event.preventDefault();

           }
            else{
                if(pwValid.test(pw12) == true){

                }
                else{
                    pwLabel.innerText="Error";
                    event.preventDefault();

                }

            }
              //valdimi per confirm password
              var pw2Valid= /^[a-z]{2,9}/;
            var pw212 = document.getElementById("password2").value;
            var pw2Label=document.getElementById("pw2-label")

            if(pw212 == ""){
            pw2Label.innerText="Please fill the Confirm Password field!";
            event.preventDefault();

            } 
            else if (pw12 != pw212 ){
                pw2Label.innerText="Password does not match!";
                event.preventDefault();
            }
    }
            )


</script>
</body>
</html>
