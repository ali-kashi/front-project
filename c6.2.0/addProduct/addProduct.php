<?php
$NameProduct=$_POST["NameProduct"];
$Prise=$_POST["Prise"];
$Description=$_POST["Description"];
$filename = $_FILES["Picture"]["name"];
$tempname = $_FILES["Picture"]["tmp_name"];
$folder = "image/".$filename;
move_uploaded_file($tempname, $folder);
$con=new mysqli("localhost","root","","front-project");
$sql="insert into product()values(\"$NameProduct\",\"$Prise\",\"$Description\",\"$filename\")";
$con->query($sql);
$con->close();
?>
