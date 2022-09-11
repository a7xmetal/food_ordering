
<?php
    include 'header.php';

     
     

$id = $_GET['id'];
$qty=$_GET['quantity'];
$sql = "SELECT * FROM tbl_food WHERE id='$id'";
$result = mysqli_query($conn,$sql);
$err = [];

if (isset($_SESSION['username'])){
    
while($row=mysqli_fetch_assoc($result))
{
    $food = $row['title'];
    $price = $row['price'];
    $total = $price * $qty;
    $image_name = $row['image_name'];

}
    }
    else{ 
        header("location:".SITEURL."user-login.php?row=1");
        
    }
if(isset($_POST['submit'])){
    
    if(!empty($_POST['customer_name'])){
        $customer_name=$_POST['customer_name'];
    }else{
        $err['customer_name'] = 'please enter customer name';
    }
   
    if(!empty($_POST['customer_contact'])){
        $customer_contact=$_POST['customer_contact'];
    }else{
        $err['customer_contact'] = 'please enter customer name';
    }

    if(!empty($_POST['customer_email'])){
        $customer_email=$_POST['customer_email'];
    }else{
        $err['customer_email'] = 'please enter customer name';
    }

    if(!empty($_POST['customer_address'])){
        $customer_address=$_POST['customer_address'];
    }else{
        $err['customer_address'] = 'please enter customeraddress';
    }


   
    
    
    
   
    if($err==0){
    $sql = "INSERT INTO `tbl_order` ( `food`, `price`, `qty`, `total`, `order_date`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`, `status`) 
    VALUES (' $food', ' $price', ' $qty', '$total', CURRENT_TIME(), '$customer_name',' $customer_contact', '$customer_email', ' $customer_address', 'No');";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            $_SESSION['success'] = "order successful";
            header('location:'.SITEURL.'index.php');
        }
        else{
            die('fail');
        }
    }
   
}

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
<style>
   
</style>

<body>
   

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            <div class="order-container">
            
            <h2 class="text-center text-black">Fill this form to confirm your order.</h2>

            <form action="" class="order" method="post">
                <fieldset>
                    <legend>Selected Food</legend>

                    <div class="food-menu-img">
                        <img src="admin/images/foods/<?php echo $image_name?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve" width='200px'>
                    </div>
    
                    <div class="food-menu-desc">
                        <h1><?php echo $food ?></h1>
                        <p class="food-price">$<?php echo $price ?></p>

                        <div class="order-label">Quantity:<?php echo $qty ?></div>
                        
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="customer_name" placeholder="E.g. Niraz" class="input-responsive" >
                    <?php
                        if(!empty($err['customer_name']))
                        {echo '<p>'.$err['customer_name'].'</p>';}
                     ?>
                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="customer_contact" placeholder="E.g. 9843xxxxxx" class="input-responsive" >
                    <?php
                        if(!empty($err['customer_contact']))
                        {echo $err['customer_contact'];}
                     ?>

                    <div class="order-label">Email</div>
                    <input type="email" name="customer_email" placeholder="E.g. hi@niraz.com" class="input-responsive" >
                    <?php
                        if(!empty($err['customer_email']))
                        {echo $err['customer_email'];}
                     ?>

                    <div class="order-label">Address</div>
                    <textarea name="customer_address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" ></textarea>
                    <?php
                        if(!empty($err['customer_address']))
                        {echo $err['customer_address'];}
                     ?>
<br>
                    <input type="submit" name="submit" value="Confirm Order" class="button button-primary">
                </fieldset>

            </form>

           
            </div>

        </div>
    </section>

    
    <!-- fOOD sEARCH Section Ends Here -->

        <?php include 'footer.php'?>

</body>
</html>