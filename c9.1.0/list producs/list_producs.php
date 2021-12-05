<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>لیست محصولات</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <h1>لیست محصولات</h1>
    <table class="data-table" >
        <tr>
          <th>نام</th>
          <th>قیمت</th>
          <th>افزودن</th>
          <th>ویرایش</th>
          <th>حذف</th>
        </tr>
		<?php
		include "controller.php";
		foreach ($products as $product)
		{
        $id=$product['id'];
        $name=$product['name'];
        $price=$product['price'];
		echo "
		<tr>
		<td>$name</td>
		<td class='data-table__number-left'>$price</td>
		<td><a href='addProduct.html'><i class='fas fa-plus-circle'></i></a></td>
		<td><a href='editProduct.php?id={$id}'><i class='fas fa-pencil-alt'></i></a></td>
		<td><a href='controller-delete.php?id={$id}'><i class='fas fa-eraser'></i></a></td>
		</tr>
		"		;
        }
		?>
    </table>
  </body>
</html>
