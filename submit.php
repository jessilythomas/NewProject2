<?php
if(isset($_POST["submit"]))
{
include 'dbConfig.php';
$name = htmlspecialchars($_POST["id"]);

 

mysql_query("INSERT INTO tbl_result (result) VALUES ('$name')"); 

echo " Added Successfully ";
}
?>