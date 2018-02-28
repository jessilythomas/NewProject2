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
<style type="text-/css">
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
        $.post("Profile.php", formValues, function(data){
            $("#result").html(data);
        });
    });
});
</script>

  <!--ajax post jquery-->
  
</head>

<body>
<!--
<div class="container" align="center">
  <h2>Modal Example</h2>
 
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

-->

<div align="right"><a href="signout.php" align="right">sign out</a></div>


    <div class="wrapper">
    <form class="form-signin" id="form-signin" method="post" action=""> 
    <?php
include 'dbConfig.php';
session_start();
$id=$_SESSION["id"];
//echo "$id";
$query1=$db->query("select r.Name,r.Address,r.Mobile,r.Dob,r.city_id,c.city_name,s.state_name,r.image from tbl_registrationnew r join tbl_city c on c.city_id=r.city_id join tbl_state s on s.state_id=c.state_id where Login_id='$id'");
    
      while ($row1=$query1->fetch_assoc()) {

        $name=$row1['Name'];
        $address=$row1['Address'];
        $dob=$row1['Dob'];
        $phone=$row1['Mobile'];
        $city=$row1['city_name'];
        $state=$row1['state_name'];
        echo '<table>';
        echo '<tr>';
        echo '<td>';
      echo "Name   :";  echo "$name";
      echo "</br>";
      echo "Address   :"; echo "$address";
      echo "</br>";
      echo "Mobile   :";  echo "$phone";
      echo "</br>";
      echo "DOB   :"; echo "$dob";
      echo "</br>";
      echo "City   :"; echo "$city";
      echo "</br>";
      echo "State   :"; echo "$state";
       echo '</td>';
        echo "</br>";
        echo '<td>';
      echo "<img src='",$row1['image'],"' width='160' height='180' />";
      echo '</td>';
      echo '</tr>';
      echo '</table>';

      }
?>  

    <!--    
      <h2 class="form-signin-heading">Login</h2>
     
      <input type="text" class="form-control" name="email" placeholder="Username" id="email" required="" autofocus="" data-rule-email="true" data-msg-required="plz enter valid Email ID"/>
    </br>
      <input type="password" class="form-control" name="password" placeholder="Password" required="" id="password" data-msg-required="plz enter password" data-rule-minlength="5" data-rule-maxlength="9" autofocus=""/>

      </br>

      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>  
      </br> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Not Registered?<a href="RegistrationFull.php">Create an account</a>
    </form>
     <script type="text/javascript" src="//code.jquery.com/jquery-2.1.0.js"></script>
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script type="text/javascript">
  $('#form-signin').validate({

  });

</script>
-->
<!--

<script type="text/javascript">
$(document).ready(function()
{
    $('#country').on('change',function()
    {
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }
        else
        {
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state').on('change',function()
    {
        var stateID = $(this).val();
        if(stateID)
        {
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }
        else
        {
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>



-->
</br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="EditFull.php">EDIT</a>
</br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="ChangePasswordFull.php">CHANGE PASSWORD</a>
</br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="DeleteAccountFull.php">DELETE ACCOUNT</a>
</br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="FeedbackFull.php">FEEDBACK</a>

</br>
</br>

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Review</button>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <input type="text" class="form-control" name="name" placeholder="Name" id="name" required="" autofocus="" data-rule-required="true" data-msg-required="plz enter Name" data-rule-pattern="[a-zA-Z ]" />
    </br>
      <input type="text" class="form-control" name="address" placeholder="Review" id="address" required="" autofocus="" data-rule-required="true" data-msg-required="plz enter Review"/>
      </br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Review</button>
        </div>
      </div>
      
    </div>
  </div>
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
