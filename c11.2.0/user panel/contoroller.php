<?php
include 'class.php';
if($_GET['action']=="exit")
{
your_session::close();
header('location:index.php');
}
?>
