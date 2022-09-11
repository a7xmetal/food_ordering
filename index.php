<?php
    include 'header.php';

	
if (isset($_SESSION['success'])) {
    echo "<script type='text/javascript'>alert('{$_SESSION['success']}');</script>";
    unset($_SESSION['success']);
}
?>
  
<!DOCTYPE html>
<html>
<head>
	<title>FoodWebsite</title>
	<link rel="stylesheet" type="text/css" href="food.css">
</head>
<body>


	<!searchbar section starts>
	<section class = "searchbar text-center">
		<div class = "container">
			<form action="<?php echo SITEURL;?>food-search.php" method="POST">
				<input type="text" name="search" placeholder = "search for food" method='post'>
				<button type = "search" class="button button-primary">Search</button>
			</form>
		</div>
	</section>
	<!searchbar section ends>

	<!category section starts>
	<section class = "category">
		<div class = "container">
			<h2 class="text-center">Category</h2>
			<?php 
			 //query to get all category from database
			 $sql = "SELECT * FROM tbl_category WHERE featured='Yes' limit 3 ";
			


			 //execute query
			 $result = mysqli_query($conn,$sql);
			 while($row=mysqli_fetch_assoc($result))
			 {?>
								
								<a href="foods.php?category_name=<?php  echo $row['title']?>">

								<div class="box img-position">
									<img src="admin/images/category/<?php echo $row['image_name']?>" alt="image-of-pizza" class="imgg">
									<h3 class="title-position text-white">Pizza</h3>
								</div>
					</a>
			<?php }?>


			
			<div class="clearfix"></div>
		</div>
	</section>
	<!category section ends>

	<!Explore foods section starts>
	<section class = "explore_foods">
		<div class = "container">
			<h2 class="text-center">Explore foods</h2>

			<?php 
			 //query to get all category from database
			 $sql = "SELECT * FROM tbl_food";

			 //execute query
			 $result = mysqli_query($conn,$sql);
			 while($row=mysqli_fetch_assoc($result))
			 {?>
					<a href="description.php?id=<?php echo $row['id']?>">

					<div class="explore-food-box">
				<div class="explore-food-img">
					<img src="admin/images/foods/<?php echo $row['image_name']?>" alt="pizza" class="imgg img-curve">
				</div>


				<div class="img-desc">
					<h4><?php echo $row['title']?></h4>
					<p class="food-price">$<?php echo $row['price']?>
					</p>
					
					<a href="Order.php?id=<?php  echo $row['id']?>&quantity=1" class="button button-primary">Order</a>

					
				

				</div>
				
			</div>
					</a>
			<?php }?>

			



			<div class="clearfix"></div>
		</div>
		<p class="text-center">
            <a href="#">See All Foods</a>
        </p>
	</section>
	<!Explore foods section ends>
    <?php include 'footer.php'?>



	</html>