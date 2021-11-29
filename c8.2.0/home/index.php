<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>فروش کده</title>
    <link rel="stylesheet" href="css/style.css">
    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>
  </head>
  <body>
    <header class="header">
      <img src="image/logo.png" alt="logo" class="logo">
      <input type="text" name="" class="header__search" placeholder="جستجو در فروشگاه کده ...">
    </header>
    <section class="body">
      <!--slider -->
      <div class="swiper swiper-slider">
        <div class="swiper-wrapper">
          <img src="image/slide1.jpg" class="swiper-slide" alt="slide1">
          <img src="image/slide2.png" class="swiper-slide" alt="slide2">
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
      </div>

<div class="swiper swiper_product-margin swiper_container">
  <div class="swiper-wrapper">
    <!--product -->
    <?php
      include 'controller.php';
      foreach ($products as $product)
      {
        $name=$product['name'];
        $price=$product['price'];
        $discription=$product['discription'];
        $url=$product['url'];
        echo "

        <div class='card swiper-slide'>
         <img src='{$url}' class='card__img-top'>
         <div class='card__body'>
           <h5 class='card__title'>{$name}</h5>
           <p class='card__text'>
              $discription<br>
              قیمت :
              $price
            </p>
           <a href='#' class='btn btn_pirimary'>افزودن به سبد خرید</a>
         </div>
        </div>
        ";
      }
       ?>
</div>
   <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
</div>
    </section>
    <footer class="footer">
      <img src="image/logo.png" alt="logo" class="logo">
    </footer>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script type="module">
      import Swiper from 'https://unpkg.com/swiper@7/swiper-bundle.esm.browser.min.js'
      const swiper = new Swiper(...)
    </script>
    <script type="text/javascript" src="javascript/javascript.js"></script>
  </body>
</html>
