<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>ویرایش پروفایل</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  </head>
  <body>
    <nav class="user-Panel">
        <ul>
          <li><a href="#">
            سلام علی کاشی
          </a>
          </li>
          <li><a href="../panel.html"><i class="fas fa-tachometer-alt"></i>
            داشبورد کاربری
          </a>
          </li>
          <li><a  class="user-Panel__select-for-primary" href="#"><i class="far fa-user"></i>
            ویرایش پروفایل
          </a>
          </li>
          <li><a href="#"><i class="fas fa-shopping-basket"></i>
            خرید ها
          </a>
          </li>
          <li><a href="#"><i class="fas fa-headset"></i>
            ارسال تیکت به پشتیبانی
          </a>
          </li>
          <li><a href="#"><i class="fas fa-bullhorn"></i>
            اعلامیه ها
          </a>
          </li>
          <li><a href="#"><i class="fas fa-home"></i>
            بازگشت به سایت
          </a>
          </li>
          <li><a href="#"><i class="fas fa-sign-out-alt"></i>
            خروج
          </a>
          </li>
        </ul>
      </nav>
    <main class="main-content">
      <form action="" method="post">
        <div class="containet">
          <div class="head">ویرایش پروفایل</div>
          <div class="wrap">
            <div class="group">
              <input type="text" id="FullName" name="fullname" value="<?php echo $fullname; ?>" required>
              <label for="FullName">نام و نام خانوادگی</label>
            </div>
            <div class="group">
              <input type="number" id="Phone" name="phone" value="<?php echo $phone; ?>" required>
              <label for="Phone">شماره موبایل</label>
            </div>
            <div class="group">
              <input type="password" id="Pass" name="pass" value="<?php echo $pass; ?>" required>
              <label for="Pass">پسورد</label>
            </div>
            <div class="group">
              <input type="password" id="RePass" name="repass" value="<?php echo $pass; ?>" required>
              <label for="RePass">تکرار پسورد</label>
            </div>
            <div class="group btn">
              <button type="submit" name="submit">ویرایش
                <i class="fas fa-arrow-alt-circle-left"></i>
              </button>
            </div>
          </div>
        </div>
     </form>
    </main>
	<script src="../component.js">
      </script>
  </body>
</html>
