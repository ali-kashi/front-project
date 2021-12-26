<?php
include 'db.php';
$db = new db('localhost','root','','front');
$products = $db->query('SELECT id,name, price FROM product')->fetchAll();
?>
