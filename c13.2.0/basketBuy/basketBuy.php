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
      $pidList=array();
    	foreach ($basketlist as $basket) {
        array_push($pidList,$basket['pid']);
    		$product = $db->query('SELECT * FROM product where id=? ' ,$basket['pid'])->fetchArray();
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
    else {
      header('location:http://localhost:8080//c12.1.0/?BasketBuy=none');
    }
    $db->close();
		?>
    </table>
    <div class="fulBuy">
      <p class="fulBuy__labelPrice">مبلغ قابل پرداخت :</p>
      <p class="fulBuy__totalPrice"><?php echo $value*$price ?></p>
          <a href="#SendInformation" class="fulBuy__btn btn filled-button">
            ادامه فرایند خرید
            <i class="fas fa-arrow-alt-circle-left"></i>
          </a>
    </div>
    <div id="SendInformation" class='SendInformation'>
      <div class="labelTitr">
        اطلاعات ارسال
      </div>
      <form action="orders.php" class="formGetInformation" method="post">
      <div class="containerInput">
        <div class="gridFull">
        <input type="hidden" name="pidList" value="<?php foreach ($pidList as $value) {
          echo "$value"."&&";
        } ?>">
        <label for="address">آدرس پستی*</label>
        <input type="text" id="address" name="address" class="input_sizeLg" required placeholder="آدرس پستی">
        <p class="containerInput__Helper-text">آدرس تحویل سفارش خود را وارد کنید</p>
        </div>
        <div>
        <label for="plaque">پلاک*</label>
        <input type="text"  id="plaque" name="plaque" required placeholder="پلاک">
        </div>
        <div>
        <label for="unit">واحد*</label>
        <input type="text" id="unit" name="unit" required placeholder="واحد">
        </div>
        <div>
        <label for="postalCode">کدپستی*</label>
        <input type="text" id="postalCode" name="postalCode" pattern="[0-9]{10}" required placeholder="کد پستی">
        <p class="containerInput__Helper-text">کدپستی باید ۱۰ رقم و بدون خط تیره باشد</p>
        </div>
        <!-- خط جداکننده -->
        <div class="split"></div>
        <div>
        <label for="name">نام گیرنده*</label>
        <input type="text" id="name" name="name" required placeholder="نام گیرنده">
        </div>
        <div>
        <label for="family">فامیل گیرنده*</label>
        <input type="text" id="family" name="family" required placeholder="فامیل گیرنده">
        </div>
        <div>
        <label for="contactNumber">شماره تماس*</label>
        <input type="text" id="contactNumber" name="contactNumber" pattern="[0-9]{11}" required placeholder="شماره تماس">
        <p class="containerInput__Helper-text">مثل: ۰۹۱۲۳۴۵۶۷۸۹</p>
        </div>
        <!-- خط جداکننده -->
        <div class="data"></div>
        <div class="gridFull">
        <label for="data">تاریخ ارسال</label>
        <input type="date" id="data" name="data">
        <p class="containerInput__Helper-text">زمان تحویل در بازه ی 9 صبح تا 22 شب است .</p>
      </div>
      </div>
      <button type='submit' class='btn_size_md btn filled-button'>
        ثبت اطلاعات
        <i class='fas fa-arrow-alt-circle-left'></i>
      </button>
    </form>
    </div>
    <?php
    include 'factor.php';
    if($order['id'])
    {
    echo "<div class='factor'>
      <div class='labelTitr'>فاکتور</div>
      <div>هزینه ی اقلام سفارش : $Prices تومان</div>";
      //ایا هزینه بالای 300 هزار تومان است
      if(isset($transportFree))
      {
        echo "<div>هزینه ی ارسال : $transport تومان ( $transportFree )</div>";
      }
      else {
        echo "<div>هزینه ی ارسال : $transport تومان</div>";
      }
      echo "
      <div>هزینه ی ارزش افزوده : $valueAdded تومان</div>
      <div class='factorTotalPrice_weight_bold'>جمع کل سفارش شما : $totalPrice تومان</div>
      <a href='finalPayment.php?oid={$order['id']}' class='btn_size_md btn filled-button'>
        پرداخت
        <i class='fas fa-arrow-alt-circle-left'></i>
      </a>
  </div>";
    }
      ?>
	</main>
  <!--پاصفحه -->
  <?php
  include '../home/php/footer.php';
  ?>
    <!--script-->
    <script src="../home/js/component.js"></script>
    <script src="js/component.js"></script>
  </body>
</html>
