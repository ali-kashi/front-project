<?php
include 'db.php';
$db = new db('localhost','root','','front');
$users = $db->query('SELECT id,name, email, phone FROM users')->fetchAll();
?>
