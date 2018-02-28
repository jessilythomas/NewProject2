<?php
include 'dbConfig.php';
session_start();
$username = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);
echo "</br>";
//echo "$username";
echo "</br>";
//echo "$password";
if($username!='' && $password!='')
{
$query=$db->query("select Login_id,Username,Password,Status from tbl_loginnew where Username='$username' and Password='$password' and Status='Active'");
$rowcount=$query->num_rows;
if($rowcount>0){			//echo "login successful";
echo "</br>";

		while($row = $query->fetch_assoc())
		{ 
			$id=$row['Login_id'];
			$username=$row['Username'];
			$password=$row['Password'];
			$_SESSION["id"]=$id;

			if('admin123@gmail.com' == $username)
			{
				echo "<script> window.location.assign('AdminPage.php'); </script>";
			}
			else
			{
			$query1=$db->query("select image from tbl_registrationnew where Login_id='$id'");
 		
 			while ($row1=$query1->fetch_assoc()) {

 				$_SESSION["path"]=$row1['image'];
 			//	$name=$row1['Name'];
 			//	$address=$row1['Address'];
 			//	$dob=$row1['Dob'];
 			//	$phone=$row1['Mobile'];
 			//echo "name   :";	echo "$name";
 			//echo "</br>";
 			//echo "phone   :";	echo "$address";
 			//echo "</br>";
 			//echo "Mobile   :";	echo "$phone";
 			//echo "</br>";
 			//echo "DOB   :";	echo "$dob";
 				echo "<script> window.location.assign('ProfileFull.php'); </script>";

 				}	
 			}
          
        }


             
}
else
{
	echo "<script type='text/javascript'>alert('invalid login');</script>";
}
}
else
{
	echo "<script type='text/javascript'>alert('plz enter valid information');</script>";
}
?>