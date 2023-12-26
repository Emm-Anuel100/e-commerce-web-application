
<?php
// Get the 9 most recently added products
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 9');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!-- Page header -->
<?=page_header('Shoplex Product')?>

<!-- home section starts  -->
<section class="home" id="home">

    <div class="content">
        <h3>Quality and <span>Affordable</span> products just for you </h3>
        <p>We give you nothing but just the best when it comes to delivering quality products to our esteemed customers.</p>
        <a href="#products" class="btn">start shopping</a>
    </div>
</section>

<!-- home section ends -->

<!-- features section starts  -->

<section class="features sec" id="features">
    <h1 class="heading"> why <span>choose us</span> </h1>

    <div class="box-container">

        <div class="box reveal">
            <img src="image/feature-img-1.png" alt="" loading="lazy">
            <h3>quality products</h3>
            <p>Quality products just for you, do check us out here</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box reveal">
            <img src="image/feature-img-2.png" alt="" loading="lazy">
            <h3>free delivery</h3>
            <p>You buy, we deliver it to your doorstep with no extra charges</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box reveal">
            <img src="image/feature-img-3.png" alt="" loading="lazy">
            <h3>easy payments</h3>
            <p>Our payment methods are easy with no stress, give it a try </p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- features section ends -->

<!---go to home section-->

<!-- products section starts  -->

<section class="products sec" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="swiper product-slider swiper1">

        <div class="swiper-wrapper">

             <?php foreach ($recently_added_products as $product): ?>
                <div class="swiper-slide box reveal">
                <a href="index.php?page=product&id=<?=$product['id']?>">
                    <img src="image/<?=$product['img']?>" alt="<?=$product['name']?>" loading="lazy">
                    <h3><?=$product['name']?></h3>
                   <div class="price">&#8358;<?=$product['price']?>/-</div>
                   <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>(455)
                </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>

       <!-- If we need pagination -->
       <div class="swiper-pagination"></div>
    </div>

</section>

<!-- products section ends -->

<!-- categories section starts  -->

<section class="categories sec" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container">

        <div class="box reveal">
            <img src="image/electronics.png.png" alt="" loading="lazy">

            <h3>Elecronics & Gadgets</h3>
            <p>25% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box reveal">
            <img src="image/clothing-PhotoRoom.png.png" alt="" loading="lazy">
            <h3>Clothing & Assecories</h3>
            <p>40% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box reveal">
            <img src="image/dairy_product.png" alt="" loading="lazy">
            <h3>Dairy Products</h3>
            <p>20% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box reveal">
            <img src="image/pastries-PhotoRoom.png.png" alt="" loading="lazy">
            <h3>Foods & Pastries</h3>
            <p>35% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

    </div>

</section>

<!-- categories section ends -->

<!-- review section starts  -->

<section class="review sec" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box reveal">
                <img src="image/badge.jpg" alt="" loading="lazy">
                <p>I love shopping with shoplex. </p>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box reveal">
                <img src="image/badge.jpg" alt="" loading="lazy">
                <p>You guys deserves a five star.</p>
                <h3>mara pedro</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="swiper-slide box reveal">
                <img src="image/badge.jpg" alt="" loading="lazy">
                <p>I love shoplex Kudos.</p>
                <h3>Robinson dave</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box reveal">
                <img src="image/badge.jpg" alt="" loading="lazy">
                <p>You guys are amazing keep it up.</p>
                <h3>Jecy carsedes</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

         </div>

          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>
    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs sec" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box reveal">
            <img src="image/blog-1.jpg" alt="" loading="lazy">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by Adams</a>
                    <a href="#"> <i class="fas fa-clock"></i> 1<sup>st</sup> oct. 2021 </a>
                </div>
                <h3>best E-commerce plartforms
                </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box reveal">
            <img src="image/blog-2.jpg" alt="" loading="lazy">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by George </a>
                    <a href="#"> <i class="fas fa-clock"></i> 25<sup>th</sup> jan. 2022 </a>
                </div>
                <h3>best Shopping offers</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box reveal">
            <img src="image/blog-3.jpg" alt="" loading="lazy">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by Sarah </a>
                    <a href="#"> <i class="fas fa-clock"></i> 3<sup>rd</sup> may. 2021 </a>
                </div>
                <h3>Grocery Packages</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </div>
</section>

<!-- blogs section ends -->


<!-- footer section starts  -->
<?=page_footer()?>