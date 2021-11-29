<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>محصولات</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="grid">
      <?php
      include 'controller.php';
      foreach ($products as $product)
      {
        $name=$product['name'];
        $price=$product['price'];
        $discription=$product['discription'];
        $url=$product['url'];
        echo "

        <div class='card'>
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
  </body>
</html>
