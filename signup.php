<?php
include 'admin/config/constant.php';

//clear session 
if (isset($_SESSION['id'])) {
    header("Location: index.php");
}



//check is submit post button press or not
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // check if all the input is empty or not
    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'&& !empty($_POST['cpassword'])])) {

      
   // username
        $username = $_POST['username'];
        $a = strlen($username);

        $email = $_POST['email'];

     

        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];



            // check if username is numerical or not and username is alphabet or not and string length must be greater equal to 3
            if (preg_match("/^[a-zA-z]*$/", $username) && !is_numeric($username) && $a >= 3) {

              
                    // check if username already exist
                    $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
                    $checkSQL = mysqli_query($con, $sql);

                    // check if username contain value
                    if (mysqli_num_rows($checkSQL) != 0) {
                        $_SESSION['message'] = 'Username already exists!';
                    } else {

                        //save to database
                        $query = "INSERT INTO `users` (,`username`, `email`,`password`,) 
					  VALUES ('user','$username','$email',  '$password', CURRENT_TIMESTAMP);";
                        mysqli_query($con, $query);

                        // redirect to login page
                        header("Location: login.php");
                        die;
                    }
                 else {
                    $_SESSION['message'] = 'Please enter valid contact number!';
                }
            } else {
                $_SESSION['message'] = 'Please enter valid username!';
            }
        } else {
            $_SESSION['message'] = 'Please enter valid fullname!';
        }
    } else {
        $_SESSION['message'] = 'Please fill all input!';
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


 

  

    <title>Bajracharya Tailoring</title>
</head>

<body>

    <!-- Navbar -->

    

    <!-- End of Navber -->

    <!-- login form -->

    
        
            <!-- Error Message -->
            <?php
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }
            ?>
                <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" value="<?php if(isset($username)){ echo $username;} ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php if(isset($email)){echo $email; }?>" required>
                
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Have an account? <a href="user-login.php">Login Here</a>.</p>
        </form>
    </div>
</body>
</html>