<?php
include 'db.php';
$db = new db('localhost','root','','front');
$products = $db->query('SELECT * FROM product')->fetchAll();
?>
