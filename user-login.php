<?php 

include 'admin/config/constant.php';




if (isset($_SESSION['username'] )&& isset($_GET['row'])) {
    header("Location:".SITEURL."order.php");// order
    //header("location:".SITEURL."welcome.php");

}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		
		header("Location:".SITEURL. "index.php");
        

	} else {
		$_SESSION['login'] = 'Wrong email or password!!';
		// echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
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

	<title>Login Form </title>
</head>
<body>
	  <?php
            // if(isset($_SESSION['login']))
            // {
            //     echo $_SESSION['login'];
            //     unset($_SESSION['login']);
            // }

            if(isset($_SESSION['no-login-message']))
            {
                echo  $_SESSION['no-login-message'];
                unset($_SESSION['no-login-message']);
            }

			 
        ?>
	<div class="container">
	
		<form action="" method="POST" class="login-email" id=>

		<?php
		if(isset($_SESSION['reg-success']))
            {
                // $reg_success =  $_SESSION['reg-success'];
				$reg_success =  'success';
                unset($_SESSION['reg-success']);
				echo '<p style="text-align:center; font-size: 20px; color:green;">'.$reg_success.'</p>';
            }?>
			<?php 
				if(isset($_SESSION['login']))
				{
					echo '<p style="text-align:center; font-size: 20px; color:red;">'.$_SESSION['login'].'</p>';
					unset($_SESSION['login']);
				}
			?>
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" id="email"placeholder="Email" name="email" value="<?php if(isset($email)){echo $email;} ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" id="password">
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>

		

	
</body>
</html>

