<html>
    <!contact section starts>
	



    <?php
    //check is submit post button press or not
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $first_name = $_POST['first_name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];

        // store values to database
        $csql = "INSERT INTO `contact` (`first_name`, `email`, `msg`, `date`) 
						VALUES ('$first_name', '$email', '$msg', CURRENT_TIMESTAMP);";
        mysqli_query($conn, $csql);
    }
    ?>

  <section class = "contact">
		<div class = "container text-center">
			
            <h1 class="text-center text-white">How May We Help You?</h1>
            <div class="">
                <div class="">
                    <div>
                        <h5><i  ></i>Location</h5>
                        <p>,Lalitpur</p>
                    </div>
                    <div class="text-white">
                        <h5><i class="f"></i>Phone</h5>
                        <p>9860234234</p>
                    </div>
                    <div class="text-white">
                        <h5><i class=""></i>Email</h5>
                        <p>bmygmail.com</p>
                    </div>
                </div>
                <div class="">
                    <form method="post">
                        <div class="row">
                            <input type="text" placeholder="Full Name" name="first_name" id="" required>
                        </div>
                        <div class="row">
                            <input type="email" placeholder="Email" name="email" id="" required>
                        </div>
                        <div class="row">
                            <textarea placeholder="Message" name="msg" id="" cols="30" rows="5"></textarea>
                        </div>
                        <button class="button-primary">Submit</button>
                    </form>
             

    <!-- End of Contact Us -->
			
			<ul>
				<li>
					<a href="#"><img src="https://img.icons8.com/fluent/48/000000/facebook-new.png"/></a>
				</li>
				<li>
					<a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
				</li>
				
			</ul>
	   </div>
            </div>
        </div>
    </section>
	<!contact section ends>

	<!footer section starts>
	<section class = "footer">
		<h1 id="Contact" class="text-center">
			Contact Us
		</h1>
		<div class = "container text-center">
			All Rights Reserved. Design By :<a href="#">Niraz</a>
		</div>
	</section>
	<!footer section ends>


</body>
</html>