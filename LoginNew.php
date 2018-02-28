<?php
include 'dbConfig.php';
$username = htmlspecialchars($_POST["username"]);
$password = htmlspecialchars($_POST["password"]);
echo "</br>";
//echo "$username";
echo "</br>";
//echo "$password";
$query=$db->query("select login_id,username,password from tbl_login where username='$username' and password='$password'");
$rowcount=$query->num_rows;
//echo "$rowcount";
if($rowcount>0){
			echo "login successful";
echo "</br>";
		while($row = $query->fetch_assoc())
		{ 
			$id=$row['login_id'];

			$query1=$db->query("select name,phone from tbl_registration where login_id='$id'");
 		
 			while ($row1=$query1->fetch_assoc()) {
 				$name=$row1['name'];
 				$phone=$row1['phone'];
 			echo "name   :";	echo "$name";
 			echo "</br>";
 			echo "phone   :";	echo "$phone";
 			}
          
        }

             
}
else
{
	echo "invalid login";
}
?>