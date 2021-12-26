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
?>
