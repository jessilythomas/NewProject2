<?php
include 'dbConfig.php';
$name = htmlspecialchars($_POST["name"]);
$phone = htmlspecialchars($_POST["phone"]);
$username = htmlspecialchars($_POST["username"]);
$password = htmlspecialchars($_POST["password"]);

$query=$db->query("insert into tbl_login(username,password)values('$username','$password')");
/*
$sql = "SELECT MAX(login_id) FROM tbl_login";
$db->execute_query($sql);
$result=$db->fetch_query();
foreach ($result as $row) {
	$id=$row['login_id'];
	$query2=$db->query("insert into tbl_registration(login_id,name,phone)values('$id','$name','$phone')");


}
*/

/*
$rowSQL = mysql_query("select max(login_id) as max from tbl_login");
$row=mysql_fetch_assoc($rowSQL);
$maximum=$row['max'];
*/

$query1=$db->query("select login_id from tbl_login where username='$username'");

$rowcount=$query1->num_rows;

if($rowcount>0)

{
	while($row = $query1->fetch_assoc())
	{ 
		$id=$row['login_id'];
           
        }
}
$query2=$db->query("insert into tbl_registration(login_id,name,phone)values('$id','$name','$phone')");




?>