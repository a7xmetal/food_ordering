<?php 
include 'header.php';
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
            <form>
                <input type="text" name="search" placeholder = "search for food" method='post'>
                <button type = "search" class="button button-primary">Search</button>
            </form>
        </div>
    </section>
    <!searchbar section ends>



   <!Explore foods section starts>
   <?php
   if(isset($_GET['category_name'])){
       $title = $_GET['category_name'];
       ?>
    <section class = "explore_foods">
    <div class = "container">
			<h2 class="text-center"><?php echo $title?></h2>

			<?php 
			 //query to get all category from database
             $sql = "SELECT * FROM tbl_food where category_name='$title'";

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
					<a href="order.php?id=<?php  echo $row['id']?>&quantity=1" class="button button-primary">Order</a>
					
				</div>
				
			</div>
					</a>
			<?php }?>
    <?php
   }else{
       ?>
       <section class = "explore_foods">
    <div class = "container">
			<h2 class="text-center">Explore food</h2>

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
					<a href="order.php?id=<?php  echo $row['id']?>&quantity=1" class="button button-primary">Order</a>
					
				</div>
				
			</div>
            <?php }
            }
            ?>

   






            <div class="clearfix"></div>
        </div>
    </section>
    <!Explore foods section ends>

    <?php include 'footer.php'?>



</body>
</html