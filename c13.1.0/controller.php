<?php
include 'db.php';
include 'dbname.php';
if(isset($_GET["pid"]))
{
$Product = $db->query('SELECT * FROM product where id=? ',$_GET["pid"])->fetchArray();
}
//include 'class.php';dbname
//@$uid=your_session::read();
// if (isset($uid))
// {
// $basketlist = $db->query('SELECT * FROM productbasket where uid=? && state=?',$uid,'action')->fetchAll();
// }
// else
// {
// 	echo "<script>alert('لطفا به حساب خود وارد شوید')<script>";
// 	header('location:localhost:8080/c12.1.0/index.php');
// }
// if(isset($_GET['basketProductValue']) && isset($uid))
// {
//
// 	$db = new db('localhost','root','','front');
// 	$db->query('UPDATE `productbasket` SET `value`=? WHERE pid=? && uid=? && state=? ',$_GET['basketProductValue'],$_GET['pid'],$uid,'action');
// 	$db->close();
// }
?>
