<?php
include 'dbConfig.php';
$name = htmlspecialchars($_POST["name"]);
$address = htmlspecialchars($_POST["address"]);

$email = htmlspecialchars($_POST["email"]);
$phone = htmlspecialchars($_POST["phone"]);

$dob = htmlspecialchars($_POST["dob"]);
$query=$db->query("insert into tbl_registrationtbl(name,address,email,phone,dob)
 values('$name','$address','$email','$phone','$dob')");
echo "$name";
echo "</br>";

echo "$address";
echo "</br>";

echo "$email";
echo "</br>";

echo "$phone";
echo "</br>";

echo "$dob";
echo "</br>";


?>