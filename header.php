<?php
    include 'admin/config/constant.php';
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>FoodWebsite</title>
	<link rel="stylesheet" type="text/css" href="food.css">
</head>
<body>
	<!navbar section starts>
<section class = "navbar">
		<!-- <div class = "container"> -->
		<div class = "nav-container">

			<div class = "menu">
				<div class= logo>
					<img src="images/logo.png" alt="foodlogo" class="imgg" >
				</div>
				<ul>
					<li><a href="index.php">Home </a> </li>
					<li><a href="categories.php">Categories </a> </li>
					<li><a href="foods.php">Foods</a> </li>
					<li><a href="#Contact">Contact</a> </li>

	

	
					<?php if (isset($_SESSION['username'])){?>
					<li class="clickme greetings"> 
						<!-- <span class="greetings"> -->
							<?php  echo $_SESSION['username']; ?>				
						<!-- </span> -->
					</li>
					<li class="logout">	
						<a href="logout.php" class='logout-btn'>Logout</a>
					</li>

					<?php }else{?>
						<li><a href="user-login.php">Log In</a> </li>
					<?php }?>
				</ul>
						
	
			</div>
			<script type="text/javascript">
			var click = document.querySelector('.clickme');
			var show = document.querySelector('.logout');

			click.addEventListener('click',function(){
				show.classList.toggle('logout-active');
			});

			</script>
						
					
					
		

				
			</div>
			<div class="clearfix"></div>


		</div>
	</section>
	<!navbar section ends>