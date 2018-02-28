<?php
include 'dbConfig.php';

$oldpass = htmlspecialchars($_POST["password1"]);
$newpass = htmlspecialchars($_POST["password2"]);
$conpass = htmlspecialchars($_POST["password3"]);

session_start();

$id=$_SESSION["id"];



if($_SESSION["id"])
{
	$query1=$db->query("select Password from tbl_loginnew where Login_id='$id'");
	$rowcount=$query1->num_rows;
	while($row = $query1->fetch_assoc())
		{ 
			//$_SESSION["pass"]=$row['Password'];
			//$pass1=$_SESSION["pass"];
			$pass1=$row['Password'];
		}

		
	if( $oldpass!=''&&  $newpass!=''&& $conpass!='')
	{
		if($oldpass==$pass1)
		{
			if($oldpass==$newpass)
			{

				 echo "<script type='text/javascript'>alert('plz enter new password');</script>";

			}
			else
			{
			$query=$db->query("update tbl_loginnew set Password='$newpass' where Login_id='$id' and Password='$oldpass'");
			echo "<script type='text/javascript'>alert('successful');</script>";
			if($id=='65')
			{
			echo "<script> window.location.assign(''); </script>";
			}
			else{
			echo "<script> window.location.assign('ProfileFull.php'); </script>";
			}
			}
		}
		else
		{
				echo "<script type='text/javascript'>alert('plz enter correct password');</script>";
		}
	}
	else
	{
	 echo "<script type='text/javascript'>alert('plz enter valid information');</script>";
	}

}
else
{
 echo "<script type='text/javascript'>alert('plz enter valid information');</script>";
}
?>