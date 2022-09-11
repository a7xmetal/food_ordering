


<?php
    include 'header.php';?>



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
                    <input type="text" name="customer_name" placeholder="E.g. Niraz" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="customer_contact" placeholder="E.g. 9843xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="customer_email" placeholder="E.g. hi@niraz.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="customer_address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

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