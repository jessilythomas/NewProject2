<?php
include 'dbConfig.php';
include 'ajaxData.php';
$name = htmlspecialchars($_POST["name"]);
$address = htmlspecialchars($_POST["address"]);

$email = htmlspecialchars($_POST["email"]);
$phone = htmlspecialchars($_POST["phone"]);

$dob = htmlspecialchars($_POST["dob"]);

$country=htmlspecialchars($_POST["country"]);


//$city=htmlspecialchars($_POST["city_id"]);
//$query1=$db->query("select country_id,country_name from tbl_countries where country_id=$country");
//$rowCount=$query1->num_rows;


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


//if($rowCount>0)
//	{
//		while ($row=$query1->fetch_assoc()) {
//			
//			echo $row['country_name'];
//		}
//	}
echo "</br>";
echo "$country";



echo "</br>"

?>

