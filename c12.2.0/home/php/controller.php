<?php
include 'db.php';
include 'dbname.php';
include 'class.php';
$products = $db->query('SELECT * FROM product')->fetchAll();
@$uid=your_session::read();
if (isset($uid))
{
  $bokmarkProduct = $db->query('SELECT pid FROM bookmarkproduct WHERE uid=? && state=? ',$uid,"action")->fetchArray();
  $likeproduct = $db->query('SELECT pid FROM likeproduct WHERE uid=? ',$uid)->fetchArray();
}
$db->close();
if(isset($_GET['bokmarkProduct']) && $_GET['bokmarkProduct'] == 'none')
{
  echo "<script>alert('لیست محصولات ذخیره شده ی شما خالی است')</script>";
}
if(isset($_GET['likeProduct']) && $_GET['likeProduct'] == 'none')
{
  echo "<script>alert('لیست محصولات پسندیده ی شما خالی است')</script>";
}
if(isset($_GET['BasketBuy']) && $_GET['BasketBuy'] == 'none')
{
  echo "<script>alert('سبد خرید شما خالی است')</script>";
}
?>
