<?php
include 'dbConfig.php';



$address = htmlspecialchars($_POST["address"]);

$phone = htmlspecialchars($_POST["phone"]);


session_start();

$id=$_SESSION["id"];
if( $_SESSION['path'] && $_SESSION["id"])
{
	
	$path=$_SESSION["path"];


	//$city_id=htmlspecialchars($_POST["city_id"]);
	if( $address!=''&&  $phone!=''&& $path!='')
	{
	

		
		$query=$db->query("update tbl_registrationnew set Address='$address',Mobile='$phone',image='$path' where Login_id='$id'");

		

		echo "<script> window.location.assign('ProfileFull.php'); </script>";
		
	
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