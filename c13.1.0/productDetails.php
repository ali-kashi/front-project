<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>جزییات محصول</title>
    <link rel="stylesheet" href="css/style.css">
    <!--فونت آیکون-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  </head>
  <body>
    <!--سر صفحه-->
 <?php
 include '../c12.2.0/home/php/header.php';
  ?>
   <!--منوها-->
   <?php
   //$select="menu";
   include '../c12.2.0/home/php/nav.php';
    ?>
     <!--قسمت اصلی سایت-->
     <main class="main-content">
      <div class="main-content__imageProduct">
        <?php
        include 'controller.php';
        if(isset ($Product['id']))
        {
        echo "<img src='http://localhost:8080/c12.2.0/home/image/{$Product['url']}'>
        </div>
      </div>
      <div class='main-content__details'>
        <p class='details__nameProduct'>{$Product['name']}</p>
        <din class='details__grid'>
        <div class='details__Property'><span>ویژگی های کالا :</span><pre class='Property__attribute'>{$Product['Property']}</pre></div>
        <div class='details__boldProperty'>
      <p class='details__labelPrice'>قیمت فروشگاه :</p>
      <p class='details__Price'>{$Product['price']}</p>
          <a href='../c12.2.0/home/php/productBasket.php?pid={$Product['id']}' class='productBasket btn filled-button'>
            افزودن به سبد خرید
            <i class='fas fa-arrow-alt-circle-left'></i>
          </a>
    </div>
      </div></div>
      <div class='feedback'>
      <p class='feedback__Title'>دیدگاه کاربران</p>
      </div>


      ";

    }
    else
    {
      header("location:http://localhost:8080/c12.2.0/");
    }
      ?>
    </main>
     <!--پاصفحه -->
 <footer class="footer">
   <div class="icon-logo">
     <img src="http://localhost:8080//c12.2.0/home/image/logo1.png" alt="foroshcade.ir">
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
   <!-- <script src="home/js/component.js"></script>
   <script src="home/js/ajexLike.js"></script>
   <script src="home/js/bookmarkProduct.js"></script> -->
   <script src="js/productBasket.js"></script>
  </body>
</html>
