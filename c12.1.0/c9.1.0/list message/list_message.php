<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>پیام ها</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <h1>لیست پیام ها</h1>
    <table class="data-table" >
        <tr>
          <th>نام و نام خانوادگی</th>
          <th>ایمیل</th>
          <th>شماره تماس</th>
          <th>موضوع</th>
          <th>پاسخ</th>
          <th>حذف</th>
        </tr>
		<?php
		include "controller.php";
		foreach ($messages as $message)
		{
        $id=$message['id'];
        $name=$message['name'];
        $email=$message['email'];
        $phone=$message['phone'];
        $title=$message['title'];
		echo "
		<tr>
		<td>$name</td>
		<td>$email</td>
		<td class='data-table__number-left'>$phone</td>
    <td>$title</td>
		<td><a href='#'><i class='fas fa-reply'></i></a></td>
		<td><a href='controller-delete.php?id={$id}'><i class='fas fa-eraser'></i></a></td>
		</tr>
		"		;
        }
		?>
    </table>
	<script src="ajexdelete.js">
  </script>
  </body>
</html>
