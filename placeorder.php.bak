
<?=page_header('Place order')?>


<!-- wrapper section starts here -->
<div class="placeorder-wrapper">
   <section class="section">
    <h1>Your Order Has Been Placed</h1>
   <p>Thank you for ordering with us! to complete the process 
       enter your email address below which will be used to contact you.</p>
   <br/>

   <!-- form holding informations such as user's cart and so -->
    <form action="./insert_cart_values.php" method="post">
    <input type="email" name="contact" required="" placeholder="email address" autocomplete="off" id="contact-infor"><br>
    <button type="submit" class="proceed-to-pay-btn" >
        Proceed 
    </button>
    </form>

   </section>
</div>
<!-- wrapper section ends here -->


 <br><br><br><br><br><br><br><br>
 <br><br><br><br><br><br><br><br>



<!-- Css styles --->
<style type="text/css">
    .placeorder-wrapper{
        top: 14rem;
        width: 100%;
        align-items: center;
        justify-content: center;
        position: relative;
    }
    section > h1{
        font-size: 22px;
        text-align: left;
    }
    @media all and (max-width: 500px){
         section > h1{
        font-size: 16px;
    }
    }
    section > h1 + p{
        font-size: 11.7px;
        line-height: 25px;
        text-align: left;
        color: gray;
        width: 80% !important;
    }
    section.section{
        justify-content: center;
        width: 100%;
    }
    input[type="email"]{
        padding: 1.2rem 2%;
        width: 32rem;
        font-family: sans-serif;
        text-transform: lowercase;
         border-radius: .3rem;
         color: gray;
         font-size: 13.5px;
         background:none;
         letter-spacing: 1.1px;
    }
	#contact-infor{
         border: 1px solid gray !important; 
	}
    .proceed-to-pay-btn {
        text-align: center;
        top: 2rem;
        position: relative;
        background:  #ff7800;
        padding: 1rem 1.7rem;
        border: 1.9px solid #ff7800 !important;
        display: inline;
        color: #fff;
        font-size: 14px;
        cursor: pointer;
        border-radius: .5rem;
    }
    .proceed-to-pay-btn:hover{
        color: #ff7800;
        background: none;
        transition: ease-in .3s;
    }
</style>


<!-- page footer --->
<?=page_footer()?>