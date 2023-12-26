<?php

## select all from api_keys table
$result = mysqli_query($conn, "SELECT * FROM (api_keys)");

if (mysqli_num_rows($result) > 0){
  # fetch next row
  $row = mysqli_fetch_array($result);
}

?> 


<?=page_header('Shoplex | Proceed to payment')?>


<form id="paymentForm">
  <div class="form-group">
    <input type="hidden" id="email-address" required value="<?= $_SESSION["contact"] ?>"/>
  </div>
  <div class="form-group">
    <input type="hidden" id="amount" required value="<?= $_SESSION["sub_total"] ?>" />
  </div>
  <div class="form-group">
   <!-- fetch API_KEY column from database -->
  <input type="hidden" id="api_key" value="<?= $row["paystack_key"]; ?>" />
  </div>
  <div class="form-submit">
    <button type="submit" onclick="payWithPaystack()" class="pays_btn"> Pay on website <i class="fas fa-arrow-right"></i></button>
  </div>
</form>





<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>

<style>
form#paymentForm{
   position: relative;
   top: 24rem !important;
   left: 2rem;
}
button{
   font-size: 16px;
   cursor: pointer;
}
i.fas{
   font-size: 11px;
}
button:hover i{
   margin-left: 7px;
}

@media screen and (max-width: 500px) {
   button{
   font-size: 14px !important;
}
}
</style>


<!-- script for initializing payment API -->
<script src="https://js.paystack.co/v1/inline.js"></script>
<script>
    const paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener("submit", payWithPaystack, false);

 function payWithPaystack(e) {
   e.preventDefault();

  let handler = PaystackPop.setup({

   key:  document.getElementById("api_key").value, // API public key
   email: document.getElementById("email-address").value,
   amount: document.getElementById("amount").value * 100,
   ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
   // label: "Optional string that replaces customer email"
   onClose: function(){
     alert('Window closed.');
   },
   callback: function(response){
     let message = 'Payment complete! Reference: ' + response.reference;
     alert(message);
     window.location = "./index.php";
   }
 });
 
 handler.openIframe();
}
</script>

<?=page_footer()?>