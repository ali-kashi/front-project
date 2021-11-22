<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>ویرایش پروفایل</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  </head>
  <body>
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
  </body>
</html>
