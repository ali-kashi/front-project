<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>محصولات</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <div class="card">
       <img src="<?php echo $url ?>" alt="" class="card__img-top">
       <div class="card__body">
         <h5 class="card__title"><?php echo $name ?></h5>
         <p class="card__text">
            <?php echo $discription ?><br>
            قیمت :
            <?php echo $price ?>
          </p>
         <a href="#" class="btn btn_pirimary">افزودن به سبد خرید</a>
       </div>
      </div>
  </body>
</html>
