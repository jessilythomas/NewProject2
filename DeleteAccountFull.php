<?php
include 'dbConfig.php';
session_start();
$id=$_SESSION["id"];



$query=$db->query("delete from tbl_loginnew where Login_id='$id'");
//$query2=$db->query("select image from tbl_registrationnew where Login_id='$id'");
//while ($row1=$query2->fetch_assoc())
//{
//unlink("images/".$row1['image']);
//}
$query1=$db->query("delete from tbl_registrationnew where Login_id='$id'");


echo "<script> window.location.assign('LoginFull.php'); </script>";
?>