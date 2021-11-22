<meta charset="utf-8">
<?php
include 'db.php';
$db = new db('localhost','root','','front');
if (isset($_GET["id"]) && !isset($_POST["submit"]))
{
  $id=$_GET["id"];
  $product = $db->query('SELECT * FROM product WHERE id = ?',$id)->fetchArray();
  $name=$product['name'];
  $price=$product['price'];
  $discription=$product['discription'];
  $url=$product['url'];
  include 'editProduct .php';
}
if (isset($_POST["submit"]))
{
  $id=$_GET["id"];
  $name=$_POST['NameProduct'];
  $price=$_POST['Prise'];
  $discription=$_POST['Description'];
  $filename = $_FILES["Picture"]["name"];
  $tempname = $_FILES["Picture"]["tmp_name"];
  $folder = "image/".$filename;
  move_uploaded_file($tempname, $folder);
  $db->query('UPDATE product set name=?,price=?,discription=?,url=? WHERE id=?',$name,$price,$discription,$filename,$id);
  echo "با موفقیت انجام شد";
}
  $db->close();
?>
