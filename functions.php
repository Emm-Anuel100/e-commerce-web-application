<?php

# Function to connect to mysql_db in PDO
function pdo_connect_mysqldb() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'shoplex';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error message.
    	exit('CONNECTION ERROR:');
    }
}



function page_header($title) {

// Get the number of items in the shopping cart, which will be displayed in the header.
$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;

echo <<<EOT
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$title</title>

    <!-- css file link for swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/cart.css">

    <!-- LInk for favIcon  -->
    <link rel="shortcut icon" href="./image/A6.jpg" type="image/x-icon">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-cart"></i> shoplex </a>

    <nav class="navbar">
        <a href="./index.php" id="home">home</a>
        <a href="./index.php#features">features</a>
        <a href="./index.php#products">products</a>
        <a href="./index.php#categories">categories</a>
        <a href="./index.php#review">review</a>
        <a href="./index.php#blogs">blogs</a>
    </nav>

    <!--creating buttons for toggle-->
    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div> <!--will be applied for mobile for navigation of the nav bar-->
        <div class="fas fa-search" id="search-btn"></div>
       <a href="./index.php?page=cart">
        <div class="fas fa-shopping-cart" id="cart-btn"><span>$num_items_in_cart</span></div>
        </a>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="#" class="search-form" method="">
            <div class="row">
              <input type="search" id="search-box" placeholder="search products here..." required="" name="" autocomplete="off">
             <button type="submit">
                <i class="fas fa-search">
                 <span>search</span>
                </i>
             </button>
            </div>
            <!--auto-complete search bar results-->
            <div class="result-box">
            </div>
    </form>

     <!--elements holding login_form declared in js as loginForm-->
    <form action="./" method="post" class="login-form forms">
        <h3>sign in</h3>
        <input type="email" name="email" placeholder="email ..." class="box" required="" autocomplete="off">
        <input type="password" name="password" placeholder="password ..." class="box password-input1" required="" autocomplete="off">
        <input type="hidden" name="signin_value" value="value">
        <span><i class="fas fa-eye no-slash1"></i></span>
        <span><i class="fas fa-eye-slash slash1"></i></span>
        <p> forgot password <em id="forgot">Click here</em></p>
        <p>don't have an account <em id="sign-up">Sign up</em></p>
        <input type="Submit" value="login" class="btn">
    </form>

<!--sign up form -->
<form action="./" method="post" class="form forms" onsubmit="return validate()">
    <h3>sign up</h3>
    <input type="text" name="username" placeholder="username ..." class="box1" required="" autocomplete="off">
    <input type="email" name="email" placeholder="email ..." class="box1" required="" autocomplete="off">
    <input type="password" name="password" placeholder="password ..." class="box1 password-input2" required="" autocomplete="off">
    <input type="hidden" name="signup_value" value="value">
    <span><i class="fas fa-eye no-slash2"></i></span>
    <span><i class="fas fa-eye-slash slash2"></i></span>
    <p> already have an account <em id="sign-in">Sign in </em></p>
    <input type="submit" value="sign up" class="btn">
</form>    

<!--forgot password form -->
<form action="#" class="forms forgot-password">
    <h3>Forgot password</h3>
    <input type="email" placeholder="email ..." class="box1 email-length" required="" name="email">
    <input type="submit" value="continue" class="btn reset-btn">
</form>
</header>

<!-- header section ends -->

EOT;
}
// Template footer
function page_footer() {
$year = date('Y');
echo <<<EOT
       
<!-- footer section starts  -->

<section class="footer">
    <div class="box-container"> <!--grid display-->

        <div class="box">
            <h3> <i class="fas fa-shopping-cart"></i> shoplex</h3>
            <p>shoplex is proudly owned by shoplex Nigeria, an ecommerce plartform based in Abuja.</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f" title="facebook"></a>
                <a href="#" class="fab fa-instagram" title="instagram"></a>
                <a href="#" class="fab fa-twitter" title="twitter"></a>
                <a href="#" class="fab fa-whatsapp" title="whatsapp"></a>
                <a href="#" class="fab fa-linkedin" title="linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +234-910-136-5413 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> info@shoplex.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Abuja - Nigeria</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Payments </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Sponsors </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Deliveries </a>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>would love to see recently added products? then subscribe to our Newsletter.</p>
            <form>
            <input type="email" placeholder="your email ..." required="" class="newsletter">
            <input type="submit" value="subscribe" class="btn" name="submit_email">
            <img src="image/payment.png" class="payment-img" alt="payment cards" loading="lazy">
            </form>
            
        </div>
    </div>

    <!--back to top section starts-->
    <div id="go-home">
    <a href="#">.</a>
    </div>
   <!--back to top section  ends-->

    <!--Cookie modal ends here-->
    <div class="wrapper">
      <span class="cancel">❌</span>
      <div class="content">
         <header>Cookie Consent</header>
         <p>we use cookies to make sure you get the best
            experience in our site
         </p>
         <div class="buttons">
            <button class="item">Accept cookies</dibutton>
            <!-- <a href="#" class="item">learn more </a> -->
         </div>
      </div>
     </div>
     <!--Cookie modal code ends here-->

    <div class="credit"><span> &copy;2012 - $year </span> | all rights reserved </div>

</section>
<!-- footer section ends -->

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="./js/script-page.js"></script>
<noscript>pls, Enable Javascript in your browser.</noscript>

</body>
</html>
EOT;
}
?>






<?php
## include Mysqli connection file
include './conn.php';

## Verifies if a value is posted
if (isset($_POST['signin_value']) && $_SERVER["REQUEST_METHOD"] === "POST") {
    ## escape special characters in value inserted by user
    $email  = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']); 
      ## select all from our users_data table where column email value is same as the email inserted by the user
      $query  = "SELECT * FROM users_data WHERE email = '$email' LIMIT 1";
      ## pass a query to our database  with our $conn var. and our query variable
      $result = mysqli_query($conn, $query);
      ## if numbers of rows with the email is greater than 1
      if(mysqli_num_rows($result) > 0){
        ## then fetch data
        while ($row = mysqli_fetch_assoc($result)) {
            ## verifies the password inserted by the user matches any harshed password in the database 
          if (password_verify($password, $row['password'])) {
              $_SESSION['id'] = $row['id'];
              ## alert message if successfull
              ?>
              <script type="text/javascript">
                alert("Successfully signed in");
                 // redirect to our home page
                window.location.pathname = "shoplex/index.php";
              </script>
              <?php
          }else{
            ## if password does not match any harshed password then alert the message below 
              ?>
              <script type="text/javascript">
                alert("Password provided is invalid");
                 // redirect to our home page
                window.location.pathname = "shoplex/index.php";
              </script>
              <?php
          }    
        }
      }else{
          ## if email does not match any email then alert the message below 
        ?>
        <script type="text/javascript">
          alert("Email provided is invalid");
          // redirect to our home page
          window.location.pathname = "shoplex/index.php";
        </script>
        <?php
      } 
  }
  ## end of the sign-in section
?>




<?php
## include Mysqli connection file
include './conn.php';

## Verifies if a value is posted
if (isset($_POST['signup_value']) && $_SERVER["REQUEST_METHOD"] === "POST") {

 ## escape special characters in value inserted by user
 $password =  mysqli_real_escape_string($conn, $_POST["password"]);
 ## hash password before saving to database
 $password = password_hash($password, PASSWORD_DEFAULT);
 $username = mysqli_real_escape_string($conn, $_POST["username"]);
 $email = mysqli_real_escape_string($conn, $_POST["email"]);
 
 ## select all from our users_data table where email column is same as the email inserted by the user
 $query = "SELECT * FROM users_data WHERE email = '$email'";
 ## pass a query on the database with our $conn and $query variable
 $result = mysqli_query($conn,$query);
    ## if email inserted by the user already exist in our users_data table
    if (mysqli_num_rows($result) > 0) {
        ## alert message below
     ?>
     <script type="text/javascript">
       alert("This email has already been used");
       // redirect to our home page
       window.location.pathname = "shoplex/index.php";
     </script>
     <?php
     exit;
     } else { 
        ## if email has not been used by anyone else
        ## then insert values into our users_data table 
      $sql = "INSERT INTO users_data (username,email,password)
      VALUES('$username','$email','$password')";  
      if ($conn->query($sql)=== true) {
         ## if values was inserted successfully then redirect to our home page
         ## header("location: ./index.php?page=home");
         ?>
            <script type="text/javascript">
              alert("successfully signed up");
              // redirect to our home page
              window.location.pathname = "shoplex/index.php";
            </script>
         <?php
      } 
     }
   }
  ## end of the sign-up section
?>
 