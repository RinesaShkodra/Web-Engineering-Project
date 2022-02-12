<?php
        if(isset($_POST['submit'])){
            //button clicked
            
        
            //get our data from our form
           $email = $_POST['email'];
           $password = md5( $_POST['password']); //encryption w md5
        
           //SQL QUERY to save the data into the database
           $sql=" SELECT * FROM users WHERE
            email ='$email' LIMIT 1,
            password='$password',
            ";
        
         // execute QUERY and READ FROM db
           $res = mysqli_query($conn,$sql) or die (mysqli_error());

		   if($res==TRUE)
			{
					$user_data = mysqli_fetch_assoc($res);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['id'] = $user_data['id'];
						header('location:'.SITEURL.'index.php');
					
					}
				}
           else
           {
               header("location:".SITEURL.'register.php');
           }
		}
        
        ?>
        


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<div class="container" >
		<br>
		<br>
		<h1 class="label">Login</h1>
		<form class="login_form" action="index.php" method="post" name="form" onsubmit="return validated()">
			<div class="font">Email </div>
			<input autocomplete="off" type="text" name="email">
			<div id="email_error">Please fill up your Email </div>
			<div class="font">Password</div>
			<input type="password" name="password">
			<div id="pass_error">Please fill up your Password</div>
			<button type="submit" name="submit">Login</button>
		</form>
	</div>	
	<script src="login.js"></script>
</body>
</html>



