<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>لیست کاربران</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <h1>لیست کاربران</h1>
    <table class="data-table" >
        <tr>
          <th>نام و نام خانوادگی</th>
          <th>ایمیل</th>
          <th>شماره تماس</th>
          <th>افزودن</th>
          <th>ویرایش</th>
          <th>حذف</th>
        </tr>
		<?php
		include "controller.php";
		foreach ($users as $user)
		{
        $id=$user['id'];
        $name=$user['name'];
        $email=$user['email'];
        $phone=$user['phone'];
		echo "
		<tr>
		<td>$name</td>
		<td>$email</td>
		<td class='data-table__number-left'>$phone</td>
		<td><a href='register.html'><i class='fas fa-plus-circle'></i></a></td>
		<td><a href='editProfile.php?id={$id}'><i class='fas fa-pencil-alt'></i></a></td>
		<td><a href='controller-delete.php?id={$id}'><i class='fas fa-eraser'></i></a></td>
		</tr>
		"		;
        }
		?>
    </table>
  </body>
</html>
