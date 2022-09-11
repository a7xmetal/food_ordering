<!DOCTYPE html>
<html>
<head>
	<title>FoodWebsite</title>
	<link rel="stylesheet" type="text/css" href="food.css">
</head>
<body>
	<!navbar section starts>
<section class = "navbar">
		<div class = "container">
			<div class= logo>
				<img src="images/logo.png" alt="foodlogo" class="imgg" >
			</div>

			<div class = "menu">
				<ul>
					<li><a href="#">Home </a> </li>
					<li><a href="#">About </a> </li>
					<li><a href="#">Foods</a> </li>
					<li><a href="#">Contact</a> </li>

					
				</ul>

				
			</div>
			<div class="clearfix"></div>


		</div>
	</section>

	 <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="#" class="order">
                <fieldset>
                    <legend>Selected Food</legend>

                    <div class="food-menu-img">
                        <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                        <h3>Food Title</h3>
                        <p class="food-price">$2.3</p>

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Niraz Maharjan" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 9860xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. abc.hlo@.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



	<!contact section starts>
	<section class = "contact">
		<div class = "container text-center">
			
			<ul>
				<li>
					<a href="#"><img src="https://img.icons8.com/fluent/48/000000/facebook-new.png"/></a>
				</li>
				<li>
					<a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
				</li>
				<li>
					
				</li>
			</ul>
		</div>
	</section>
	<!contact section ends>

	<!footer section starts>
	<section class = "footer">
		<div class = "container text-center">
			All Rights Reserved. Design By :<a href="#">Niraz</a>
		</div>
	</section>
	<!footer section ends>