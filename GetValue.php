<?php
// connect to the database
include 'dbConfig.php';
// confirm that the 'id' variable has been set
if (isset($_GET['id']) && is_numeric($_GET['id']))
{
$id = $_GET['id'];
//echo $id;
$query1=$db->query("select Status from tbl_loginnew where Login_id='$id'");
while ($row1=$query1->fetch_assoc()) 
	{
	$status=$row1['Status'];
	if($status=='Pending'){
		$query=$db->query("update tbl_loginnew set Status='Active' where Login_id='$id'");
	}
	else
	{
		$query=$db->query("update tbl_loginnew set Status='Pending' where Login_id='$id'");
	}

}
//$query=$db->query("update tbl_loginnew set Status=1 where Login_id='$id'");
echo "<script> window.location.assign('AdminViewUserPhp.php');</script>";
}

?>