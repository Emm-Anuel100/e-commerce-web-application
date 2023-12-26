
<?php
// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
    // Prepare statement and execute, prevents SQL injection
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if (!$product) {
        // Simple error to display if the id for the product doesn't exists (array is empty)
        exit('This Product does not exist!');
    }
} else {
    // Simple error to display if the id wasn't specified
    exit('This Product does not exist!');
}
?>


<!-- Page header -->
<?=page_header('Shoplex Product')?>

<section class="item-wrapper">
   <img src="./image/<?=$product['img']?>" alt="<?=$product['name']?>">

   <div class="right-item-wrapper">
      <h1><?=$product['name']?></h1>

      <p>&#8358;<samp><?=$product['price']?></samp></p>
      <form action="./index.php?page=cart" method="post">
      <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="1" required>
      <input type="hidden" name="product_id" value="<?=$product['id']?>"><br/>
      <input type="submit" value="Add To Cart" class="cart">
      </form>

      <p>
         <li class="item-desc"><?=$product['desc']?></li>
      </p>
   </div>
</section>
<br/><br/><br/><br/>
<br/><br/>

<!-- footer section starts  -->
<?=page_footer()?>