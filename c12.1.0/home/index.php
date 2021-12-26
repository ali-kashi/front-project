<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>فروش کده</title>
    <!--استایل منوی پنل-->
	   <link rel="stylesheet" href="stylePanel.css">
     <!--استایل -->
    <link rel="stylesheet" href="style.css">
    <!--فونت آیکون-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!--استایل اسلابدر-->
    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>
  </head>
  <body>
    <!--سر صفحه-->
    <header class="header">
      <div class="icon-logo">
        <img src="image/logo1.png" alt="foroshcade.ir">
      </div>
      <p class="name-store"><span>فروشکده</span> یک فروشگاه آنلاین </p>
        <!--  <input type="text" class="header__search" placeholder="جستجو در فروشگاه ...">-->
    </header>
    <!--منوها-->
	<nav class="user-Panel">
        <ul>
          <li><a href="#">
            منوها
          </a>
          </li>
          <li><a class="user-Panel__select-for-primary" href="#"><i class="fas fa-home"></i>
            صفحه اصلی
          </a>
          </li>
          <li><a href="editProfile/editProfile.php"><i class="fab fa-product-hunt"></i>
            محصولات
          </a>
          </li>
          <li><a href="#"><i class="far fa-user"></i>
            ورود به حساب کاربری
          </a>
          </li>
          <li><a href="#"><i class="fas fa-shopping-cart"></i>
            سبد خرید
          </a>
          </li>
          <li><a href="#"><i class="far fa-address-card"></i>
            درباره ما
          </a>
          </li>
        </ul>
      </nav>
      <!--قسمت اصلی سایت-->
	  <main class="main-content">
      <!-- تصاویر اولیه سایت-->
      <div class="main-content__images-top-main">
        <div class="main-content__image-right-main">
          <img src="image/image2.jpg" class="">
          <img src="image/image3.jpg" class="">
          </div>
          <div class="main-content__image-left-main">
          <img src="image/image1.jpg">
        </div>
      </div>
          <!--product in slide -->
          <div class="swiper swiper_product-margin">
            <p class="swiper__title-swiper">گوشی موبایل</p>
            <div class="swiper-wrapper">
              <?php
                include 'controller.php';
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
                   <img src='image/{$url}'>
                   </div>
                   <div class='card__body'>
                     <div class='card__title'>{$name}</div>
                     <p class='card__text'>
                        $price
                        تومان
                      </p>
                     <a href='productBasket.php?pid={$id}' class='card__productBasket'><button class='btn btn_pirimary'>افزودن به سبد خرید</button></a>
                     ";
                     //وضعیت بوک مارک
                     if (isset($bokmarkProduct['pid']) && $bokmarkProduct['pid']==$id)
                     {
                       echo "<a href='bookmarkProduct.php?pid={$id}' class='card__bookmark-product'><i class='fas fa-bookmark'></i></a>";
                     }
                     else {
                       echo "<a href='bookmarkProduct.php?pid={$id}' class='card__bookmark-product'><i class='far fa-bookmark'></i></a>";
                     }
                     //وضعیت لایک محصول
                     if (isset($likeproduct['pid']) && $likeproduct['pid']==$id)
                     {
                       echo "<a href='like.php?pid={$id}' class='card__like-product'><i class='fas fa-heart'></i></a>";
                     }
                     else {
                       echo "<a href='like.php?pid={$id}' class='card__like-product'><i class='far fa-heart'></i></a>";
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
      <img src="image/logo1.png" alt="foroshcade.ir">
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
    <script type="text/javascript" src="javascript.js"></script>
    <script src="component.js"></script>
    <script src="ajexLike.js"></script>
    <script src="bookmarkProduct.js"></script>
    <script src="productBasket.js"></script>
  </body>
</html>
