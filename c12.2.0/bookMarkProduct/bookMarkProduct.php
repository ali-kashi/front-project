<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>محصولات ذخیره شده</title>
    <link rel="stylesheet" href="css/style.css">
    <!--فونت آیکون-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  </head>
  <body>
    <!--سر صفحه-->
  <?php
  include '../home/php/header.php';
   ?>
    <!--منوها-->
    <?php
    $select="bookMark";
    include '../home/php/nav.php';
     ?>
      <!--قسمت اصلی سایت-->
	  <main class="main-content">
    <h1 class="namePage">لیست محصولات ذخیره شده</h1>
    <?php
                include 'controller.php';
                if(isset($bokmarkProductList[0]['pid']))
                {
                foreach ($bokmarkProductList as $bokmarkProduct)
                {
                  $product = $db->query('SELECT * FROM product where id=?',$bokmarkProduct['pid'])->fetchArray();
                  $id=$product['id'];
                  $name=$product['name'];
                  $price=$product['price'];
                  $property=$product['Property'];
                  $url=$product['url'];
                  echo "
                  <div class='card'>
                  <div class='card__img-top'>
                   <img src='http://localhost:8080//c12.1.0/home/image/{$url}'>
                   </div>
                   <div class='card__body'>
                     <div class='card__title'>{$name}</div>
                     <p class='card__text'>
                        $price
                        تومان
                      </p>
                     <a href='http://localhost:8080//c12.1.0/home/php/productBasket.php?pid={$id}' class='card__productBasket'><button class='btn btn_pirimary'>افزودن به سبد خرید</button></a>
                     ";
                     //وضعیت بوک مارک
                     if (isset($bokmarkProduct['pid']) && $bokmarkProduct['pid']==$id)
                     {
                       echo "<a href='http://localhost:8080//c12.1.0/home/php/bookmarkProduct.php?pid={$id}' class='card__bookmark-product'><i class='fas fa-bookmark'></i></a>";
                     }
                     else {
                       echo "<a href='http://localhost:8080//c12.1.0/home/php/bookmarkProduct.php?pid={$id}' class='card__bookmark-product'><i class='far fa-bookmark'></i></a>";
                     }
                     //وضعیت لایک محصول
                     $likeObject='false';
                     foreach ($likeproductList as $likeproduct)
                     {
                     if (isset($likeproduct['pid']) && $likeproduct['pid']==$id)
                     {
                       echo "<a href='http://localhost:8080//c12.1.0/home/php/like.php?pid={$id}' class='card__like-product'><i class='fas fa-heart'></i></a>";
                       $likeObject='true';
                     }
                    }
                    if($likeObject=='false')
                    {
                    echo "<a href='http://localhost:8080//c12.1.0/home/php/like.php?pid={$id}' class='card__like-product'><i class='far fa-heart'></i></a>";
                    }
                     echo "
                   </div>
                  </div>
                  ";
                }
                $db->close();
              }
              else {
                header('location:http://localhost:8080//c12.1.0/?bokmarkProduct=none');
              }                
                 ?>
	</main>
  <!--پاصفحه -->
  <?php
  include '../home/php/footer.php';
  ?>
    <!--script-->
    <script src="../home/js/component.js"></script>
    <!-- <script src="component.js"></script> -->
    <script src="http://localhost:8080//c12.1.0/home/js/ajexLike.js"></script>
    <script src="js/bookmarkProduct.js"></script>
    <script src="http://localhost:8080//c12.1.0/home/js/productBasket.js"></script>
  </body>
</html>
