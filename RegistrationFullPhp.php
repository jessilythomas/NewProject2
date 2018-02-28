<?php
include 'dbConfig.php';
include 'ajaxData.php';

$name = htmlspecialchars($_POST["name"]);
$address = htmlspecialchars($_POST["address"]);

$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);

$phone = htmlspecialchars($_POST["phone"]);

$dob = htmlspecialchars($_POST["dob"]);

$country=htmlspecialchars($_POST["country"]);


if(isset($_SESSION['city_id']) && isset($_SESSION['path']))
{
	$City_id=$_SESSION["city_id"];
	$path=$_SESSION["path"];


	//$city_id=htmlspecialchars($_POST["city_id"]);
	if($name!=''&& $address!=''&& $email!='' && $phone!=''&& $password!=''&& $dob!=''&& $City_id!='' && $path!='')
	{
	$query5=$db->query("select Username from tbl_loginnew where Username='$email'");
	$rowcount1=$query5->num_rows;
	if($rowcount1>0)
		{
			echo "<script type='text/javascript'>alert('Email id already exists');</script>";

		}
	else
		{

		$query10=$db->query("select image from tbl_registrationnew where image='$path'");
		$rowcount10=$query10->num_rows;
		if($rowcount10>0)
		{
			echo "<script type='text/javascript'>alert('image  already exists');</script>";

		}

		else
		{
		$query=$db->query("insert into tbl_loginnew(Username,Password)values('$email','$password')");

		$query1=$db->query("select login_id from tbl_loginnew where Username='$email'");

		$rowcount=$query1->num_rows;

			if($rowcount>0)

			{
				while($row = $query1->fetch_assoc())
				{ 
					$id=$row['login_id'];
           
       			 }
			}
	
		$query2=$db->query("insert into tbl_registrationnew(Login_id,Name,Address,Mobile,Dob,city_id,image)values('$id','$name','$address','$phone','$dob','$City_id','$path')");

		echo "<script> window.location.assign('LoginFull.php'); </script>";
		}
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