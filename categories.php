<?php
    include 'header.php';
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="food.css">
</head>

<body>
   

    <!-- CAtegories Section Starts Here -->
    <!category section starts>
	<section class = "category">
		<div class = "container">
			<h2 class="text-center">Category</h2>
			<?php 
			 //query to get all category from database
			 $sql = "SELECT * FROM tbl_category  ";
			


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

            

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->


  <?php include 'footer.php'?>

</body>
</html>