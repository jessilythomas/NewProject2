<?php
include 'dbConfig.php';
session_start();
$id=$_SESSION["id"];
$city_id=$_SESSION["city_id"];
echo "$id";
$query1=$db->query("select Name,Address,Mobile,Dob,city_id from tbl_registrationnew r join tbl_city c on c.city_id=r.city_id  where Login_id='$id' and c.city_name='$city_id'" );
 	 			while ($row1=$query1->fetch_assoc()) {
 				$name=$row1['Name'];
 				$address=$row1['Address'];
 				$dob=$row1['Dob'];
 				$phone=$row1['Mobile'];
 				$city=$row1['city_name'];
 			echo "name     :";	echo "$name";
 			echo "</br>";
 			echo "phone    :";	echo "$address";
 			echo "</br>";
 			echo "Mobile   :";	echo "$phone";
 			echo "</br>";
 			echo "DOB      :";	echo "$dob";
 			echo "</br>";
 			echo "City Name:";	echo "$city";
 			}
 
?>