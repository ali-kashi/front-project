<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>فروش کده</title>
    <link rel="stylesheet" href="home/css/style.css">
    <!--فونت آیکون-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!--استایل اسلابدر-->
    <link
  rel="stylesheet"
  href=""
/>
  </head>
  <body>
    <!--سر صفحه-->
  <?php
  include 'home/php/header.php';
   ?>
    <!--منوها-->
    <?php
    $select="menu";
    include 'home/php/nav.php';
     ?>
      <!--قسمت اصلی سایت-->
	  <main class="main-content">
      <!-- تصاویر اولیه سایت-->
      <div class="main-content__images-top-main">
        <div class="main-content__image-right-main">
          <img src="home/image/image2.jpg" class="">
          <img src="home/image/image3.jpg" class="">
          </div>
          <div class="main-content__image-left-main">
          <img src="home/image/image1.jpg">
        </div>
      </div>
          <!--product in slide -->
          <div class="swiper swiper_product-margin">
            <p class="swiper__title-swiper">گوشی موبایل</p>
            <div class="swiper-wrapper">
              <?php
                include 'home/php/controller.php';
                foreach ($products as $product)
                {
                  $id=$product['id'];
                  $name=$product['name'];
                  $price=$product['price'];
                  $property=$product['Property'];
                  $url=$product['url'];
                  echo "
                  <div class='card swiper-slide'>
                  <div class='card__img-top'>
                   <img src='home/image/{$url}'>
                   </div>
                   <div class='card__body'>
                     <div class='card__title'>{$name}</div>
                     <p class='card__text'>
                        $price
                        تومان
                      </p>
                     <a href='home/php/productBasket.php?pid={$id}' class='card__productBasket'><button class='btn btn_pirimary'>افزودن به سبد خرید</button></a>
                     ";
                     //وضعیت بوک مارک
                     if (isset($bokmarkProduct['pid']) && $bokmarkProduct['pid']==$id)
                     {
                       echo "<a href='home/php/bookmarkProduct.php?pid={$id}' class='card__bookmark-product'><i class='fas fa-bookmark'></i></a>";
                     }
                     else {
                       echo "<a href='home/php/bookmarkProduct.php?pid={$id}' class='card__bookmark-product'><i class='far fa-bookmark'></i></a>";
                     }
                     //وضعیت لایک محصول
                     if (isset($likeproduct['pid']) && $likeproduct['pid']==$id)
                     {
                       echo "<a href='home/php/like.php?pid={$id}' class='card__like-product'><i class='fas fa-heart'></i></a>";
                     }
                     else {
                       echo "<a href='home/php/like.php?pid={$id}' class='card__like-product'><i class='far fa-heart'></i></a>";
                     }
                     echo "
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
	</main>
  <!--پاصفحه -->
  <footer class="footer">
    <div class="icon-logo">
      <img src="home/image/logo1.png" alt="foroshcade.ir">
    </div>
    <p class="name-store"><span>فروشکده</span></p>
   <div class="footer__Stay-with-us">
     <p>با ما همراه باشید</p>
       <div class="footer__link-Stay-with-us">
         <i class="fab fa-instagram"></i>
         <i class="fab fa-telegram-plane"></i>
         <i class="fab fa-whatsapp"></i>
       </div>
   </div>
 </footer>
    <!--script-->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script type="module">
      import Swiper from 'https://unpkg.com/swiper@7/swiper-bundle.esm.browser.min.js'
      const swiper = new Swiper(...);
    </script>
    <script type="text/javascript" src="home/js/javascript.js"></script>
    <script src="home/js/component.js"></script>
    <script src="home/js/ajexLike.js"></script>
    <script src="home/js/bookmarkProduct.js"></script>
    <script src="home/js/productBasket.js"></script>
  </body>
</html>
