<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>محصولات</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  </head>
  <body>
    <header class="header">
          <img src="image/logo.png" alt="logo" class="header__logo">
          <input type="text" name="" class="header__search" placeholder="جستجو در فروشگاه ...">
          <label class="btn outlined-button">ورود به حساب کاربری
          <i class="far fa-user"></i>
          </label>
          <span>|</span>
          <img src="image/icon-basket.png" class="icon-basket">

    </header>
    <div class="grid">
      <?php
      include 'controller.php';
      foreach ($products as $product)
      {
        $id=$product['id'];
        $name=$product['name'];
        $price=$product['price'];
        $discription=$product['discription'];
        $url=$product['url'];
        echo "

        <div class='card'>
        <input class='card-href' type='hidden' value='view.html?id={$id}'>
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
    <footer class="footer">
      <img src="image/logo.png" alt="footer__logo" class="footer__logo">
      <div class="footer__Stay-with-us">
        <p>با ما همراه باشید</p>
          <div class="footer__link-Stay-with-us">
            <i class="fab fa-instagram"></i>
            <i class="fab fa-telegram-plane"></i>
            <i class="fab fa-whatsapp"></i>
          </div>
      </div>
    </footer>
    <script type="text/javascript" src="component.js">
    </script>
  </body>
</html>
