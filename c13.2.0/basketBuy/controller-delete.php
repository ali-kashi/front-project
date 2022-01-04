<?php
include 'db.php';
include 'class.php';
@$uid=your_session::read();
if (isset($uid))
{
if (isset($_GET["id"])) {
  $db = new db('localhost','root','','front');
   $db->query('UPDATE `productbasket` SET `state`=? WHERE pid=? && uid=? && state=?','noaction',$_GET['id'],$uid,'action');
   echo "deleteRowBasketBuy";
}
}
else {
  echo "nologin";
}
?>
