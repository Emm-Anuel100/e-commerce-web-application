<?php

// If the user clicked the add to cart button on the product page we can check for the form data
if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['product_id']) && is_numeric($_POST['quantity'])) {
   // Set the post variables so we easily identify them, also make sure they are integer
   $product_id = (int)$_POST['product_id'];
   $quantity = (int)$_POST['quantity'];
   // Prepare the SQL statement, we basically are checking if the product exists in our databaser
   $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
   $stmt->execute([$_POST['product_id']]);
   // Fetch the product from the database and return the result as an Array
   $product = $stmt->fetch(PDO::FETCH_ASSOC);
   // Check if the product exists (array is not empty)
   if ($product && $quantity > 0) {
       // Product exists in database, now we can create/update the session variable for the cart
       if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
           if (array_key_exists($product_id, $_SESSION['cart'])) {
               // Product exists in cart so just update the quanity
               $_SESSION['cart'][$product_id] += $quantity;
           } else {
               // Product is not in cart so add it
               $_SESSION['cart'][$product_id] = $quantity;
           }
       } else {
           // There are no products in cart, this will add the first product to cart
           $_SESSION['cart'] = array($product_id => $quantity);
       }
   }
   // Prevent form resubmission...
   header('location: index.php?page=cart');
   exit;
}



// Remove product from cart, check for the URL param "remove", this is the product id, make sure it's a number and check if it's in the cart
if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    // Remove the product from the shopping cart
    unset($_SESSION['cart'][$_GET['remove']]);
 }


 // Update product quantities in cart if the user clicks the "Update" button on the shopping cart page
 if (isset($_POST['update']) && isset($_SESSION['cart'])) {
    // Loop through the post data so we can update the quantities for every product in cart
    foreach ($_POST as $k => $v) {
        if (strpos($k, 'quantity') !== false && is_numeric($v)) {
            $id = str_replace('quantity-', '', $k);
            $quantity = (int)$v;
            // Always do checks and validation
            if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                // Update new quantity
                $_SESSION['cart'][$id] = $quantity;
            }
        }
    }
    // Prevent form resubmission...
    header('location: index.php?page=cart');
    exit;
 }


  // Send the user to the place order page if they click the Place Order button, also the cart should not be empty
if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    header('Location: index.php?page=placeorder');
    exit;
 }
 
 
 // Check the session variable for products in cart
 $products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
 $products = array();
 $subtotal = 0.00;
 // If there are products in cart
 if ($products_in_cart) {
     // There are products in the cart so we need to select those products from the database
     // Products in cart array to question mark string array, we need the SQL statement to include IN (?,?,?,...etc)
     $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
     $stmt = $pdo->prepare('SELECT * FROM products WHERE id IN (' . $array_to_question_marks . ')');
     // We only need the array keys, not the values, the keys are the id's of the products
     $stmt->execute(array_keys($products_in_cart));
     // Fetch the products from the database and return the result as an Array
     $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
     // Calculate the subtotal
     foreach ($products as $product) {
         $subtotal += (float)$product['price'] * (int)$products_in_cart[$product['id']];
     }
} 
?>

    <!-- informations about ordered items [e.g productss name, quantity, and total amount of goods added to cart]-->
    <div style="display: none">
    <?= @$_SESSION["product_infor"] = $products ?>
    <?= @$_SESSION["product_quantity"] = $products_in_cart?>
    <?= @$_SESSION["sub_total"] = $subtotal ?>
    </div>


<?=page_header('Your cart')?>

<main class="page">
   <h3 class="label">your cart <span class="dot">.</span>
   </h3>
   <br/><br/>
   <?php if (empty($products)): ?>

   <h2 style="position: relative; text-align: center; font-size: 14.1px; font-weight: 400">No item in cart click on products to add items</h2>
   <?php else: ?>  

   <form action="index.php?page=cart" method="post">
   <section class="flex-content">
   <?php foreach ($products as $product): ?>
      <div class="flex-item">
         <img src="./image/<?=$product['img']?>" alt="<?=$product['name']?>">
         <div class="flex-del-btn">
            <div class="product-details">
               <h2><?=$product['name']?></h2>

               <div class="price_quant">
                 <span> &#8358;<?=$product['price'] * $products_in_cart[$product['id']]?>/- </span><br/>
                  <h3>Qty: <input type="number" name="quantity-<?=$product['id']?>" value="<?=$products_in_cart[$product['id']]?>" min="1" reqired="" class="quantity"></h3>
               </div>
            </div>
            <a href="index.php?page=cart&remove=<?=$product['id']?>" class="del-btn">
               <i class="fas fa-trash"></i>
            </a>
         </div>
      </div>

      <?php endforeach; ?>
      <?php endif; ?>

      </section>
      <br/><br/>

      <div class="total">
            <samp>Total: &#8358;<?=$subtotal?></samp> <br/>
           <input type="submit" value="Update cart" name="update" class="btn-sub"><br/>
           <input type="submit" value="Check out" name="placeorder" class="btn-sub">
         </div>
      </form>
      
<?=page_footer()?>
</main>
