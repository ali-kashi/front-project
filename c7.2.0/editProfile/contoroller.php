<meta charset="utf-8">
<?php
include 'db.php';
$db = new db('localhost','root','','front');
if (isset($_GET["id"]) && !isset($_POST["submit"]))
{
  $id=$_GET["id"];
  $users = $db->query('SELECT * FROM users WHERE id = ?',$id)->fetchArray();
  $fullname=$product['fullname'];
  $phone=$product['phone'];
  $pass=$product['pass'];
  include 'editProfile.php';
}
if (isset($_POST["submit"]))
{
  $id=$_GET["id"];
  $fullname=$_POST['fullname'];
  $phone=$_POST['phone'];
  $pass=$_POST['pass'];
  $db->query('UPDATE users set fullname=?,phone=?,pass=? WHERE id=?',$fullname,$phone,$pass,$id);
  echo "با موفقیت انجام شد";
}
  $db->close();
?>
