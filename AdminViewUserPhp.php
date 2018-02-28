<?php
include 'dbConfig.php';

?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Bootstrap Snippet: Login Form</title>
 <!-- Model   -->

   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<!-- Model   -->

  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">
<style type="text/css">
    #form .form-group label.error {
    color: #FB3A3A;
    display: inline-block;
    margin: 0px 0 0px 0px;
    padding: 0;
    text-align: left;
    }
</style>


 <!--ajax post jquery-->

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    $("form").submit(function(event){
        event.preventDefault();
        var formValues = $(this).serialize();
        $.post("GetValue.php", formValues, function(data){
            $("#result").html(data);
        });
    });
});
</script>

  <!--ajax post jquery-->
  
</head>

<body>





    <div class="wrapper">
    <form class="form-signin" id="form-signin" method="post" action=""> 
    <?php
include 'dbConfig.php';
session_start();
$id=$_SESSION["id"];
//echo "$id";
$query1=$db->query("select l.Login_id, r.Name,r.Address,r.Mobile,r.Dob,r.city_id,c.city_name,l.Status,s.state_name,r.image from tbl_registrationnew r join tbl_city c on c.city_id=r.city_id join tbl_state s on s.state_id=c.state_id join tbl_loginnew l on l.Login_id=r.Login_id ");
    echo "<table border='1' cellpadding='10'>";

echo "<tr>  <th>  First Name   </th> <th>   Mobile   </th> <th>   </th> <th>   </th><th>   </th></tr>";


      while ($row1=$query1->fetch_assoc()) {

        $name=$row1['Name'];
        $address=$row1['Address'];
        $dob=$row1['Dob'];
        $phone=$row1['Mobile'];
        $city=$row1['city_name'];
        $state=$row1['state_name'];
        
echo "<tr>";

//echo '<td>' . $row['id'] . '</td>';

echo '<td>' . $row1['Name'] . '</td>';

echo '<td>' . $row1['Mobile'] . '</td>';
echo '<td class="color" class="form-control">' . $row1['Status'] . '</td>';

echo '<td><a href="GetValue.php?id=' . $row1['Login_id'] . '">Update</a></td>';

echo '<td><a href="GetValue1.php?id=' . $row1['Login_id'] . '">View Details</a></td>';

echo "</tr>";

      }
?>  

<style type="text/css">
  .color {
  
  color: #ade;
  border: 1px solid rgba(a, e, 0, 0.1);
}
</style>


<div id="result">

  </div>
  </div>
   <script type="text/javascript" src="//code.jquery.com/jquery-2.1.0.js"></script>
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script type="text/javascript">
  $('#form-signin').validate({

  });

</script>




</body>

</html>
