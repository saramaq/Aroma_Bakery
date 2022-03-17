    <?php

     require_once("condb.php");
    require_once("dbcontroller.php");


     ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport"
  content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <link rel="icon" type="image/x-icon" href="imge/Cake_44353.ico">
  <link rel="stylesheet" href="style.css">
  <!-- custom js file link  -->
  <script src="script.js"></script>

    <title>Aroma Bakery Website Project for CS381 Course</title>
</head>
<body >

<header>

    <a href="#" class="logo"> Aroma Bakery </a>

    <nav class="navbar">
        <a  href="#home">Home</a>
        <a href="#dishes">Best Sellers</a>
        <a href="#about">About Us</a>
        <a href="#menu">menu</a>
        <a href="#order">Catring</a>
        <a href="#review">review</a>

    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <a href="component.php" id="cart-it" class="fas fa-shopping-cart"></a>
        </div>
        </header>
<!--

<!- header section ends-->



<!-- home section starts  -->

<section class="home" id="home" >

     <div class="swiper-container home-slider"  >
        <div class="swiper-wrapper wrapper">
            <div class="swiper-slide slide " >

<div class="slider" id="bg-div">
              <img class="mySlides  w3-round " src="imge/header1.jpg"
              >
              <img class="mySlides  w3-round" src="imge/header2.jpg"
              >
              <img class="mySlides   w3-round" src="imge/header3.jpg"
              >
</div>
              <script>
            // Automatic Slideshow - change image every 3 seconds
            var myIndex = 0;
            carousel();

            function carousel() {
              var i;
              var x = document.getElementsByClassName("mySlides");
              for (i = 0; i < x.length; i++) {
                 x[i].style.display = "none";
              }
              myIndex++;
              if (myIndex > x.length) {myIndex = 1}
              x[myIndex-1].style.display = "block";
              setTimeout(carousel, 3000);
            }
            </script>
                <div class="content">
                    <span> </span>
                    <h3>Aroma Bakery</h3>
                    <p>Pastries and more .. made with the finest ingredients
                  <br>
                  <br>
                  <br>
                  <br>
                    </p>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- home section ends -->



<!-- bestseller section starts  -->

<section class="dishes" id="dishes">

    <h3 class="sub-heading"> Best sellers </h3>
    <h1 class="heading"> our fresh baked goods</h1>
      <div class="box-container">

        <?php
        // retreaving from database table bestseller
        $sql = "SELECT * FROM bestseller;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_query($conn, $sql);
            if ($resultCheck){
              while ($row = mysqli_fetch_assoc($result)){
                bestseller( $row['id'], $row['title'], $row['image'], $row['description'], $row['price'] );}
              }

              function bestseller($id, $title, $image, $description, $price){
              $element="


              <div class=\"box product-item\">
                  <i class=\"fas fa-heart\"></i>

                    <img class=\"pimage\"src=$image id=\"pic\">
                  <a  type=\"button\" onclick=\"on()\" class=\"fas fa-eye\"></a>

                  <div id=\"overlay\" onclick=\"off()\">
      <div id=\"text\"><img src=$image id=\"picture\"></div>
    </div>
                  <img class=\"pimage\" src=$image id=\"overlay\" onclick=\"off()\">
                  <h3 class=\"ptitle\">$title </h3>
                  <p class=\"card-text w3-large pdes\">
                       $description</p>
                   <div class=\"stars\">
                      <i class=\"fas fa-star\"></i>
                      <i class=\"fas fa-star\"></i>
                      <i class=\"fas fa-star\"></i>
                      <i class=\"fas fa-star\"></i>
                      <i class=\"fas fa-star\"></i>
                  </div>
                  <span class=\"pprice\">SAR $price</span>

                  <input class=\"pid\" type='hidden' name='product_id'value='$id'>

              </div>

              ";

              echo $element;
            }
          ?>
<br>
<br>

</div>

<!-- javascript function for zooming out the picture -->
</picture>
        <script>
        function on() {
          document.getElementById("overlay").style.display = "block";
        }

        function off() {
          document.getElementById("overlay").style.display = "none";
        }
  //
  //       $(".fa").click(function() {
  //   $(this).toggleClass("fas fa-heart");
  // });


        </script>
</div>
</section>
<!-- bestseller section ends -->




<!-- about section starts  -->

<section class="about" id="about">

    <h3 class="sub-heading"> about us </h3>
    <h1 class="heading"> why choose us? </h1>

    <div class="row">

        <div class="image">
            <img src="imge\bakery2.jpg" class="w3-border w3-padding  w3-round " alt="bakery shop">
        </div>

        <div class="content">
          <article>
            <h3>best bakery in town</h3>
            <p>Walking into our bakery means being immediately greeted by a delightful smell of freshly baked treats that no one can resist. As a neighborhood bakery that serves the local community, we are committed to using the best ingredients and serving you delicious, handcrafted baked goods.</p>
            <p>We have used the same recipes for generations, keeping true to the original creations and signature products you know and love. Our dedicated bakers will make sure to always have your favorites, so come on in and have a bite!</p>
            <div class="icons-container">
                <div class="icons">
                    <!-- <i class="fas fa-shipping-fast"></i> -->
                    <span>fast order</span>
                </div>
                <div class="icons">
                    <!-- <i class="fas fa-seedling"></i> -->
                    <span>freshly & organic</span>
                </div>
                <div class="icons">
                    <!-- <i class="fas fa-seedling"></i> -->
                    <span>24/7 service</span>
                </div>
            </div>
            <!-- <a href="#" class="btn">learn more</a> -->
        </div>
  </article>
    </div>

</section>

<!-- about section ends -->





<!-- menu section starts  -->
<section class="menu" id="menu">

    <h3 class="sub-heading"> our menu </h3>
    <h1 class="heading"> This Month's Speciality </h1>

     <div class="box-container">

<!-- using iframe tag to show the content of component.php file "cart" -->
      <iframe allow="fullscreen" id="frame" class=" w3-center" src="component.php" width="1500" height="7000"  frameborder="0">

</div>
</section>
<!-- menu section ends -->



<!-- order section starts  -->

<section class="order" id="order">

    <h3 class="sub-heading"> catring services </h3>
    <h1 class="heading"> Delicious Events? Celebrate With Us </h1>
<br>
<br>

<section class="footer w3-padding" style="font-family: "Courier New", monospace;">
<div class="box-container">

<div class="box"> <h1 class="w3-center">Corporate Event</h1>
<p class="w3-center w3-large w3-container ">We are experts at catering to both large and small groups. No matter the size, Bakers Aroma is ready to start baking up delightful treats that you and your guests will love. We can’t wait to make your next event truly memorable.</p>
</div>




<div class="box"> <h1 class="w3-center">Wedding</h1>
<p class="w3-center w3-large w3-container">We would be honored to be a part of your next celebration. Just let us know your wishes and desires and we’ll take care of the rest. Find out how we can make your Wedding a truly special and unforgettable event.</p>
</div>


<div class="box"> <h1 class="w3-center">Birthday Party </h1>
<p class="w3-center w3-large w3-container">Make your Birthday Party extra special with Bakers Aroma. Our team will be sure to bake up some of the most delicious treats for all of your guests. Get in touch to see some of our sample party trays and learn more about what we offer.</p>
</div>
</div>
</section>
<br>
<br>
<br>
<br>
<h3 class="sub-heading"> Fill the form to replace an order </h3>

<!-- order form calling with include -->
<?php  include("orderform.php"); ?>

</section>

<!-- order section ends -->



<!-- review section starts  -->

<aside class="w3-padding w3-card review" id="review">

    <h3 class="sub-heading"> customer's review </h3>
    <h1 class="heading"> what they say </h1>


      <div class="swiper-container review-slider ">

          <div class="swiper-wrapper ">

              <div class="swiper-slide slide ">
                  <i class="fas fa-quote-right"></i>
                  <div class="user">
                      <img src="./imge/female.png" alt="pic">
                      <div class="user-info">
                          <h3>Enas Sami</h3>
                          <div class="stars">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                          </div>
                      </div>
                  </div>
                  <p> Had my wedding cookies made and they were beyond perfect. Also everyone at the wedding complimented how good they tasted.
</p>

</div>








            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="./imge/male.png" alt="pic">
                    <div class="user-info">
                        <h3>Mr.Smith</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Go get these donuts and various pastries. You will not be disappointed as they are the best. Local owned and operated. Staff is very friendly and helpful</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="./imge/male.png" alt="pic">
                    <div class="user-info">
                        <h3>Anwar fahad</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>This bakery is a slice of heaven. All the pastries are looks beautiful and delicious. Give it a try you won’t be disappointed! </p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="./imge/female.png" alt="pic">
                    <div class="user-info">
                        <h3>Nuha Saad </h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>The products are excellent, especially like the pecan cinnamon rolls. We also purchased a Chocolate cake a couple weeks ago for a birthday that was excellent!</p>
            </div>

        </div>

    </div>

</aside>
<!-- review section ends -->


<!-- footer section starts  -->

<footer class="footer">

    <div class="box-container">

        <div class="box">
            <h3>locations</h3>
            <a href="#">riydah</a>
            <a href="#">jeddah</a>
            <a href="#">yanbu</a>
            <a href="#">makkah</a>

        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home">home</a>
            <a href="#dishes">best sellers</a>
            <a href="#about">about us</a>
            <a href="#menu">menu</a>
            <a href="#order">catring</a>
            <a href="#review">reivew</a>

        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+996-456-7890</a>

        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <div class="credit"> copyright @ 2021 by <span class="w3-text-black">Sara Maqbol - Nehal Alanazi</span> </div>

</footer>

<!-- footer section ends -->


</body>
</html>
