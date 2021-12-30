<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>سبد خرید</title>
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
    $select="basket";
    include '../home/php/nav.php';
     ?>
      <!--قسمت اصلی سایت-->
	  <main class="main-content">
      <table class="data-table" >
        <tr>
          <th>محصول</th>
          <th></th>
          <th>تعداد</th>
          <th>قیمت واحد</th>
          <th>حذف</th>
        </tr>
		<?php
		include "controller.php";
    if (isset($basketlist[0]['uid'])) {
    	foreach ($basketlist as $basket) {
    		$productlist = $db->query('SELECT * FROM product where id=? ' ,$basket['pid'])->fetchAll();
    		if (isset($productlist[0]['id']))
    		{
          foreach ($productlist as $product) {
          $id=$product['id'];
          $name=$product['name'];
          $price=$product['price'];
          $url=$product['url'];
          $value=$basket['value'];

          echo "
          <tr class='data-table__container'>
          <input type='hidden' value='$id'>
          <td><img src='http://localhost:8080//c12.1.0/home/image/{$url}'></td>
          <td class='data-table__nameProduce'>$name</td>
          <td><input type='number' class='data-table__number-left' min='0' value='{$value}'></td>
          <td class='data-table__number-left data-table__price'>$price</td>
          <td><a href='controller-delete.php?id={$id}'><i class='fas fa-eraser'></i></a></td>
          </tr>
          "		;
    		}
    	}
    }
    }
    else {
      header('location:http://localhost:8080//c12.1.0/?BasketBuy=none');
    }
    $db->close();
		?>
    </table>
    <div class="fulBuy">
      <p class="fulBuy__labelPrice">مبلغ قابل پرداخت :</p>
      <p class="fulBuy__totalPrice"><?php echo $value*$price ?></p>
          <a href="" class="btn filled-button">
            ادامه فرایند خرید
            <i class="fas fa-arrow-alt-circle-left"></i>
          </a>
    </div>
	</main>
  <!--پاصفحه -->
  <?php
  include '../home/php/footer.php';
  ?>
    <!--script-->
    <script src="../home/js/component.js"></script>
    <script src="component.js"></script>
  </body>
</html>
