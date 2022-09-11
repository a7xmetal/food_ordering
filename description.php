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

<div class = "container">
    <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM tbl_food WHERE id='$id'";
        $result = mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result))
        {?>
   
			
			<div class="box img-position">
				<img src="admin/images/foods/<?php echo $row['image_name']?>" alt="image-of-pizza" class="imgg">
				
			</div>
			

		
			<div class="box img-position">
				<h3 class=" text-black">Food name:</h3>
				<h2 ><?php echo $row['title']?></h2>
				<h4 class=" text-black">Description:</h4>
				<h3 ><?php echo $row['description']?></h3>
				<h4 class="text-black">Price:</h4>
				<h3 >$<?php echo $row['price']?></h3>
			</div>
<?php } ?>
			<div class="box img-position">
				<form action="order.php" method="get" style="padding:80px">
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    Quantity:<input type="number" name="quantity"><br><br>
                    <input type="submit" value="Submit" class="btn-secondary">
                </form>
			</div>
		</div>
			

<div>

</div>





</body>
</html>