<?php
include 'db.php';
$db = new db('localhost','root','','front');
$products = $db->query('SELECT * FROM product')->fetchAll();
foreach ($products as $product)
{
  $name=$product['name'];
  $price=$product['price'];
  $discription=$product['discription'];
  $url=$product['url'];
  include 'product.php';
}
?>
