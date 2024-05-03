<?php
## starts a new session
session_start();
## include mysqli connection to server
include_once("./conn.php");


## let's store users contact in a session
$_SESSION["contact"] = $_POST["contact"];

## php code to insert products infor. into database
 if (isset($_POST['contact']) && $_SERVER["REQUEST_METHOD"] === "POST") {
    ## initialize variables to store our sessions
     $product_infor = array($_SESSION["product_infor"]); 
     $product_quantity = ($_SESSION["product_quantity"]);
     $contact_infor = $_POST["contact"];
     $total = ($_SESSION["sub_total"]); 
     
   ## we can't store php array into mysql database so  
   ## let's encode array to JSON Objects
   $json_data1 = json_encode($product_infor);
   $json_data2 = json_encode($product_quantity);

     $sql = "INSERT INTO orders (product,quantity,contact,subtotal) 
     VALUES ('$json_data1','$json_data2','$contact_infor','$total')";
   
      ## pass a query on the database
    if ($conn->query($sql)=== true) {
        ## if values are inserted into database then redirect to the payment page
        $redirect = "./index.php?page=payment_pay";
        header("Location: $redirect");

        ## unset cart session which will claer all items in user's cart
        unset($_SESSION['cart']);
    }
    else{
      ## if there is an error while inserting values into database
        echo("error inserting cart values");
    }
}
?>
