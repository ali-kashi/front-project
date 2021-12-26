<?php
include 'db.php';
$db = new db('localhost','root','','front');
if (isset($_GET["id"])) {
   $db->query('DELETE FROM users WHERE id=?',$_GET["id"]);
}
?>
