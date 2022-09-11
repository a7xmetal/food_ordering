<?php 

include 'admin/config/constant.php';






if (isset($_SESSION['username'])) {
    header("Location:".SITEURL." user-login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
	$_SESSION['reg-success'] = '';
	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				// echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				//redirect page TO 
				$_SESSION['reg-success'] = "Registration successful";
        header("location:".SITEURL."user-login.php");

			} else {
				
			}
		} else {
			
		}
		
	} else {
		
	}
}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form - Pure Coding</title>
</head>
<body>
	  <?php
            if(isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }

            if(isset($_SESSION['no-login-message']))
            {
                echo  $_SESSION['no-login-message'];
                unset($_SESSION['no-login-message']);
            }
        ?>
	<div class="container">
		<form action="" method="POST" class="login-email"  onsubmit="return validation()">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" id="user" value="<?php if(isset($username)){ echo $username;} ?>" >
				<span id="username"></span>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email"  id="emails"value="<?php if(isset($email)){echo $email; }?>" >
				<span id="emailids"></span>
				
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password"id="pass" >
				<span id="passwords"></span>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" id="conpass">
				<span id="confrmpass"></span>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="user-login.php">Login Here</a>.</p>
		</form>
	</div>

	
	<script type="text/javascript">
		

		function validation(){

			var user = document.getElementById('user').value;
			var pass = document.getElementById('pass').value;
			var confirmpass = document.getElementById('conpass').value;
			var emails = document.getElementById('emails').value;

			





			if(user == ""){
				document.getElementById('username').innerHTML =" <div class='error '>** Please fill the username field </div>";
				return false;
			}
			if((user.length <= 2) || (user.length > 20)) {
				document.getElementById('username').innerHTML =" <div class='error '>** Username lenght must be between 2 and 20 </div>";
				return false;	
			}
			if(!isNaN(user)){
				document.getElementById('username').innerHTML ="<div class='error'> ** only characters are allowed </div>";
				return false;
			}







			if(pass == ""){
				document.getElementById('passwords').innerHTML =" <div class='error'>** Please fill the password field </div>";
				return false;
			}
			if((pass.length <= 5) || (pass.length > 20)) {
				document.getElementById('passwords').innerHTML =" <div class='error '>** Passwords lenght must be between  5 and 20 </div>";
				return false;	
			}


			if(pass!=confirmpass){
				document.getElementById('confrmpass').innerHTML ="<div class='error '> ** Password does not match ";
				return false;
			}



			if(confirmpass == ""){
				document.getElementById('confrmpass').innerHTML ="<div class='error '> ** Please fill the confirmpassword field";
				return false;
			}




	


			if(emails == ""){
				document.getElementById('emailids').innerHTML ="<div class='error '> ** Please fill the email idx` field";
				return false;
			}
			if(emails.indexOf('@') <= 0 ){
				document.getElementById('emailids').innerHTML =" <div class='error '>** @ Invalid Position";
				return false;
			}

			if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
				document.getElementById('emailids').innerHTML ="<div class='error '> ** . Invalid Position";
				return false;
			}
		}

	</script>
</body>
</html>