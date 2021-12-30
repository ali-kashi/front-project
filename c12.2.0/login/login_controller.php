<meta charset="utf-8">
<?php
include 'class.php';
include 'db.php';
$phone=$_POST['phone'];
$pass=$_POST['pass'];
$db = new db('localhost','root','','front');
$qr='SELECT * FROM `users` WHERE `phone`=? && `password`=?';
$user = $db->query($qr,$phone,$pass)->fetchArray();
if(isset($user["id"]))
{
  your_session::set($user["id"]);
  //echo your_session::read();
  header('location:index.php');
  close();
}
else {
    echo "نام کاربری یا رمز عبور شما صحیح نیست !";
}
$db->close();
?>
