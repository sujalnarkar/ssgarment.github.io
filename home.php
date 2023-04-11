<?php


include 'components/connect.php';


session_start();


if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};


include 'components/wishlist_cart.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   



<?php include 'components/user_header.php'; ?>

<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            
         
  

      <!-- <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-2.png" alt="">
         </div>
         <div class="content">
            <span>upto 50% off</span>
            <h3>latest watches</h3>
            <a href="shop.php" class="btn">shop now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-3.png" alt="">
         </div>
         <div class="content">
            <span>upto 50% off</span>
            <h3>latest headsets</h3>
            <a href="shop.php" class="btn">shop now</a>
         </div>
      </div> -->



   </div>

      <div class="swiper-pagination"></div>

   </div>



</section>

</div>

<section class="banner-container">

    <div class="banner">
  


        <img src="https://thumbs.dreamstime.com/b/surprised-young-woman-holding-big-empty-space-her-hands-showing-large-size-staring-impressed-camera-surprised-young-260609666.jpg" alt="">

        <div class="content">
            <span>special offer</span>
            <h3>upto 50% off</h3>
            <a href="shop.php" class="btn">shop now</a>
        </div>
    </div>
    
    <div class="banner">
        <img src="project images/shop_banner_img2.jpg" alt="">
        <div class="content">
            <span>special offer</span>
            <h3>upto 50% off</h3>
            <a href="shop.php" class="btn">shop now</a>
        </div>
    </div>




</section>
<section class="featured" id="featured">

    <h1 class="heading"> <span>TOP</span> products </h1>

<section class="home" id="home">

    <div class="swiper-container image-slider">
        <div class="swiper-wrapper">
          
    <div class="swiper-slide"><img src="https://www.kalaniketan.com/media/catalog/product/cache/a21c1d38413de64f1250fbeb2309e062/r/t/rt4200_152541.jpg" alt=""></div>
<div class="swiper-slide"><img src="https://assets2.andaazfashion.com/media/catalog/product/d/i/digital-print-poly-silk-wine-maroon-men-kurta-pajama-mkpa01076-1.jpg" alt=""></div>
<div class="swiper-slide"><img src="https://5.imimg.com/data5/ANDROID/Default/2022/8/SQ/HO/OX/153990963/product-jpeg-500x500.jpg" alt=""></div>
<div class="swiper-slide"><img src="https://5.imimg.com/data5/ANDROID/Default/2022/8/XJ/TU/LN/153990963/product-jpeg-500x500.jpg" alt=""></div>
<div class="swiper-slide"><img src="https://5.imimg.com/data5/ANDROID/Default/2022/8/SQ/HO/OX/153990963/product-jpeg-500x500.jpg" alt=""></div>
<div class="swiper-slide"><img src="https://shivanistylehouse.co.uk/adminpanel/uploads/product_images/slider/157192.jpg" alt=""></div>
<div class="swiper-slide"><img src="https://assets.panashindia.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/8/0/805mw01-3830.jpg" alt=""></div>
<div class="swiper-slide"><img src="https://i.pinimg.com/474x/62/1b/e0/621be07965acf5e6823d908c88865710.jpg" alt=""></div>
        </div>
    </div>

</section>
</section>




<section class="home-products">

   <h1 class="heading">Exclusive products</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>₹</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>




</section>

<?php include 'extra.php'; ?>

<section class="deal">

    <div class="image">
        <img src="https://image.wedmegood.com/resized/1000X/uploads/vendor_cover_pic/2820/73cd659a-3c99-4971-890f-4072c0754432.png" alt="">
    </div>

    <div class="content">
        <span>new season trending!</span>
        <h3>best summer collection</h3>
        <p>sale get up to 50% off</p>
        <a href="shop.php" class="btn">shop now</a>
    </div>

</section>

<!-- reviews section starts  -->

<section class="review" id="review">

    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="swiper review-slide">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <p>The clothes I ordered arrived quickly and fit perfectly. I was impressed with the quality and attention to detail. I will definitely be ordering from this website again in the future.</p>
                <div class="user">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdQwWI0aelJlqfCn9BnfZIhX2M2rPb4aJWfayPvJix&s" alt="">
                    <div class="info">
                        <h3>sujal</h3>
                        <span>happy client</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p> I was hesitant to order clothes online, but the detailed product descriptions and customer reviews made it easy to make an informed decision. I am happy with my purchase and will be recommending this website to my friends. </p>
                <div class="user">
                    <img src="https://www.shutterstock.com/image-photo/closeup-portrait-yong-woman-casual-260nw-1554086789.jpg" alt="">
                    <div class="info">
                        <h3>riya</h3>
                        <span>happy client</span>
                    </div>
                </div> 
            </div>

            <div class="swiper-slide slide">
                <p>The customer service on this website is excellent. They were able to answer all of my questions and make recommendations based on my needs. I appreciate the personalized attention and will be a repeat customer.</p>
                <div class="user">
                    <img src="data:image/jpeg;base64,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" alt="">
                    <div class="info">
                        <h3>sahil</h3>
                        <span>happy client</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>I love the unique selection of clothes on this website. I was able to find something that suited my style and personality perfectly. The ordering process was easy and my clothes arrived in great condition.</p>
                <div class="user">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5V_R7qG1_PakQWgcu5Wh9jmA-bjRLGZiuQ_NRzkbeDq_zxUOFpnqqn7-Hxs3ws6nyAK0&usqp=CAU" alt="">
                    <div class="info">
                        <h3>pooja</h3>
                        <span>happy client</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p> I had a great experience shopping on this website. The clothes are high-quality and the prices are reasonable. The website is easy to navigate and the ordering process was seamless. I will definitely be a returning customer.</p>
                <div class="user">
                    <img src="https://post.medicalnewstoday.com/wp-content/uploads/sites/3/2020/03/GettyImages-1092658864_thumb-732x549.jpg" alt="">
                    <div class="info">
                        <h3>vedant</h3>
                        <span>happy client</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p> I love the unique selection of clothes on this website. I was able to find something that suited my style and personality perfectly. The ordering process was easy and my clothes arrived in great condition.
 </p>
                <div class="user">
                    <img src="https://media.istockphoto.com/id/1335941248/photo/shot-of-a-handsome-young-man-standing-against-a-grey-background.jpg?b=1&s=170667a&w=0&k=20&c=Dl9uxPY_Xn159JiazEj0bknMkLxFdY7f4tK1GtOGmis=" alt="">
                    <div class="info">
                        <h3>sunny</h3>
                        <span>happy client</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>




<!-- reviews section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="icons-container">

        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>address</h3>
            <p>TAGORE NAGAR VIKHROLI MUMBAI-400083 </p>
        </div>

        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>sujalnarkar172@gmail.com</p>
            <p>sujalnarkar12345gmail.com</p>
        </div>

        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>phone</h3>
            <p>+123-456-7890</p>
            <p>+111-222-3333</p>
        </div>

    </div>

    <div class="row">

        <form action="">
            <h3>get in touch</h3>
            <div class="inputBox">
                <input type="text" placeholder="your name">
                <input type="email" placeholder="your email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="your number">
                <input type="text" placeholder="your subject">
            </div>
            <textarea placeholder="your message" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1633431163028!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

    </div>

</section>

<!-- contact section ends -->








<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});


var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});




var swiper = new Swiper(".review-slide", {
  loop:true,
  spaceBetween:20,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
  },
});




var swiper = new Swiper(".image-slider", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2,
        slideShadows: true,
    },
    loop:true,
    autoplay: {
          delay: 2000,
          disableOnInteraction: false,
    },
});
menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('nav-toggle');
});
    
window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('nav-toggle');
}
</script>

</body>
</html>