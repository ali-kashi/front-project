<?php
include 'db.php';
include 'class.php';
@$uid=your_session::read();
if (isset($uid))
{
$db = new db('localhost','root','','front');
$basketlist = $db->query('SELECT * FROM productbasket where uid=? && state=?',$uid,'action')->fetchAll();
}
else
{
	echo "<script>alert('لطفا به حساب خود وارد شوید')<script>";
	header('location:localhost:8080/c12.1.0/index.php');
}
if(isset($_GET['basketProductValue']) && isset($uid))
{

	$db = new db('localhost','root','','front');
	$db->query('UPDATE `productbasket` SET `value`=? WHERE pid=? && uid=? && state=? ',$_GET['basketProductValue'],$_GET['pid'],$uid,'action');
	$db->close();
}
?>
