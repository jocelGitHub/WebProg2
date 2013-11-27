<?php
include"connect.php";

$id = $_GET['id'];
$query = "UPDATE message SET is_approve = 'N' where id = '$id'";
mysql_query($query);
echo "<script>alert('Record was rejected');window.location.href='read.php';</script>";
?>
