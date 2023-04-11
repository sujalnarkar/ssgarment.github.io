<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<style>
/*
* font-family: 'Roboto', sans-serif;
* font-weight: 100, 400, 400-italic, 700;
*/
* {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

body {
  margin: 0;
  padding: 0;
  font-family: 'Roboto', sans-serif;
  background-color: #F8F9FA;
  color: #222222;
  font-weight: 400;
}

strong {
  font-weight: 700;
}

img {
  max-width: 100%;
}

p {
  font-size: 1.200rem;
  color: #222222;
  margin: 0 0 15px;
  line-height: 1.6;
}

h1, h2, h3, h4, h5, h6, h7 {
  margin: 0;
}

h1 {
  color: #000000;
  font-size: 36px;
}

@media (min-width: 768px) {
  h1 {
    font-size: 80px;
  }
}

h2 {
  color: #222222;
  font-size: 30px;
}

@media (min-width: 768px) {
  h2 {
    font-size: 60px;
  }
}

h3 {
  color: #444444;
  font-size: 24px;
}

@media (min-width: 768px) {
  h3 {
    font-size: 50px;
  }
}

h4 {
  color: #555555;
  font-size: 22px;
}

@media (min-width: 768px) {
  h4 {
    font-size: 40px;
  }
}

h5 {
  color: #666666;
  font-size: 20px;
}

@media (min-width: 768px) {
  h5 {
    font-size: 35px;
  }
}

h6 {
  color: #777777;
  font-size: 18px;
}

@media (min-width: 768px) {
  h6 {
    font-size: 32px;
  }
}






a.cta {
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  background-color: #f72d3d;
  border: 1px solid #d41c2a;
  border-radius: 25px;
  color: #FFFFFF;
  text-transform: uppercase;
  display: inline-block;
  -webkit-box-shadow: rgba(100, 100, 111, 0.8) 0px 7px 19px 0px;
          box-shadow: rgba(100, 100, 111, 0.8) 0px 7px 19px 0px;
  -webkit-transition: all 0.8s ease;
  transition: all 0.8s ease;
}

a.cta:hover {
  background-color: #f75763;
  border: 1px solid #3b1215;
  color: #000000;
}

.container {
  max-width: 1100px;
  margin: 0 auto;
}

.container img {
  padding: 0.25rem;
  border: 1px solid #bdbdbd;
  border-radius: 0.25rem;
}

.banner {
  background: -webkit-gradient(linear, left top, right top, from(rgba(241, 157, 0, 0.8)), to(rgba(0, 0, 0, 0.5))), url(../img/banner.jpg) no-repeat;
  background: linear-gradient(90deg, rgba(241, 157, 0, 0.8), rgba(0, 0, 0, 0.5)), url(../img/banner.jpg) no-repeat;
  background-position: top right;
  background-size: cover;
}

.banner h1 {
  color: rgba(255, 255, 255, 0.85);
  text-transform: uppercase;
  font-weight: 700;
}

.banner p {
  color: #FFFFFF;
  font-size: 1.375rem;
  letter-spacing: 1.5px;
  font-weight: 100;
  text-shadow: 2px 2px 7px #222222;
}

.first {
  background-color: #FFFFFF;
  background-image: linear-gradient(315deg, #a7a8a8 0%, #E9EBEC 74%);
}

.first .container {
  max-width: 800px;
}

.second {
  background-color: #fff8e6;
}

.second .container {
  display: block;
}

@media (min-width: 768px) {
  .second .container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
}

@media (min-width: 768px) {
  .second .container .left-img {
    -ms-flex-preferred-size: 30%;
        flex-basis: 30%;
  }
}

@media (min-width: 768px) {
  .second .container .right-content {
    -ms-flex-preferred-size: 65%;
        flex-basis: 65%;
  }
}

.second .container .right-content h2 {
  margin: 30px 0 0;
}

@media (min-width: 768px) {
  .second .container .right-content h2 {
    margin: 0;
  }
}

.third {
  background-color: #e6f5fc;
}

@media (min-width: 768px) {
  .third .container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
}

.third .container .left-content {
  -ms-flex-preferred-size: 68%;
      flex-basis: 68%;
}

.third .container .right-img {
  -ms-flex-preferred-size: 30%;
      flex-basis: 30%;
}

.four {
  background-color: #c6fcb8;
}

.four .container {
  display: block;
}

@media (min-width: 768px) {
  .four .container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
  }
}

.four .container .member {
  background-color: #c0c6fa;
  padding: 20px;
  margin: 5px;
  border-radius: 5px;
  -webkit-box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
          box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

@media (min-width: 768px) {
  .four .container .member {
    -ms-flex-preferred-size: 31%;
        flex-basis: 31%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
  }
}

@media (min-width: 768px) {
  .four .container .member h3 {
    font-size: 20px;
  }
}

.four .container .member .social {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
}

.four .container .member .social a img {
  border: none;
  max-width: 40px;
}

.five {
  background-color: #fcde88;
}

.five .container {
  max-width: 700px;
  -webkit-box-shadow: rgba(0, 0, 0, 0.8) 0px 7px 29px 0px;
          box-shadow: rgba(0, 0, 0, 0.8) 0px 7px 29px 0px;
}

.five .container .video-wrapper {
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
}

.five .container .video-wrapper video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.six .container {
  text-align: center;
  max-width: 800px;
}


/*# sourceMappingURL=style.css.map */
/*# sourceMappingURL=style.css.map */
   </style>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="project images/ecommerce.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Our platform is ready to help your eCommerce clothing website and fashion brand succeed online. With a full in-house team, we’ve delivered high-end website design services since 2004.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>


  <section class="third">
    <div class="container">
      <div class="left-content">
        <h2>With Our Mentor</h2>
        <p>This project is a huge team effort. 
         My team and I extend our deepest gratitude and thanks to the following people who have helped us to achieve our work.
Special thanks to our project guide Er.Poonam Pawar mam for guiding us and helping in time when we needed most. We got to learn many things from her and it was our pleasure to work with her. My team extend thanks to our faculties of our college whom we have approached for academic help with regards to our project. We also would like to thank our HOD Er. Vijay Patil and Principal Prof. Ashish Ukidve for their support and guidance.</p>
        <a class="cta" href="index.html">Contact us »</a>
      </div>
      <div class="right-img">
        <img src="./img/photo-5.jpg" alt="photo">
      </div>
    </div>    <!-- .container -->
  </section>  <!-- .third -->

  <section class="four">
    <div class="container">
      <div class="member">
        <img src="./img/photo-1.jpeg" alt="photo">
        <h3>Sujal Narkar</h3>
        <p>Sujal Narkar, age 18, studying in Vidyalankar Polytechnic currently doing Diploma in Computer Engineering 3rd year has contributed in this project in back-end for components using PHP and handling the data given by user for Database using MySQL</p>
        <div class="social">
          <a title="LinkedIn" href="index.html"><img src="./img/linkedin.png" alt="linkedin"></a>
          <a title="Facebook" href="index.html"><img src="./img/facebook.png" alt="facebook"></a>
          <a title="Instagram" href="index.html"><img src="./img/instagram.png" alt="instagram"></a>
        </div>
      </div>  <!-- .member -->
       <div class="member">
        <img src="./img/photo-3.jpeg" alt="photo">
        <h3>Vedant Dhaktode</h3>
        <p>Vedant Dhaktode, age 18, studying in Vidyalankar Polytechnic currently doing Diploma in Computer Engineering 3rd year has contributed in this project in back-end for providing actions to those components used in the website using PHP</p>
        <div class="social">
          <a title="LinkedIn" href="index.html"><img src="./img/linkedin.png" alt="linkedin"></a>
          <a title="Facebook" href="index.html"><img src="./img/facebook.png" alt="facebook"></a>
          <a title="Instagram" href="index.html"><img src="./img/instagram.png" alt="instagram"></a>
        </div>
      </div>  <!-- .member -->
      <div class="member">
        <img src="./img/photo-2.jpeg" alt="photo">
        <h3>Sujal Rane</h3>
        <p>Sujal Rane, age 18 years, studying in Vidyalankar Polytechnic currently doing Diploma in Computer Engineering 3ed year has contributed in this project for designing the website using CSS</p>
        <div class="social">
          <a title="LinkedIn" href="index.html"><img src="./img/linkedin.png" alt="linkedin"></a>
          <a title="Instagram" href="index.html"><img src="./img/instagram.png" alt="instagram"></a>
          <a title="Medium" href="index.html"><img src="./img/medium.png" alt="medium"></a>
        </div> <!-- .social -->
      </div>  <!-- .member -->
      <div class="member">
        <img src="./img/photo-4.jpeg" alt="photo">
        <h3>Shridhar Pujari</h3>
        <p>Shridhar Pujari, age 18 years, studying in Vidyalankar Polytechnic currently doing Diploma in Computer Engineering 3rd year has contributed in this project for designing the layouts and components of website using HTML</p>
        <div class="social">
          <a title="LinkedIn" href="index.html"><img src="./img/linkedin.png" alt="linkedin"></a>
          <a title="Facebook" href="index.html"><img src="./img/facebook.png" alt="facebook"></a>
          <a title="Medium" href="index.html"><img src="./img/medium.png" alt="medium"></a>
        </div> <!-- .social -->
      </div>  <!-- .member -->
    </div>    <!-- .container -->
  </section>  <!-- .four -->


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
</section>






<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>