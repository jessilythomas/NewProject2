<?php
include 'dbConfig.php';
$query=$db->query("select country_id,country_name from tbl_countries");
$rowCount=$query->num_rows;
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">

<!--
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

-->



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
        $.post("LoginFullPhp.php", formValues, function(data){
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
      <h2 class="form-signin-heading">Login</h2>
     
      <input type="text" class="form-control" name="email" placeholder="Username" id="email" required="" autofocus="" data-rule-email="true" data-msg-required="plz enter valid Email ID"/>
    </br>
      <input type="password" class="form-control" name="password" placeholder="Password" required="" id="password" data-msg-required="plz enter password" data-rule-minlength="5" data-rule-maxlength="9" autofocus=""/>

      </br>

      
      <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="clearForm(this.form);">Login</button>  
      </br> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Not Registered?<a href="RegistrationFull.php">Register</a>
    </form>
     <script type="text/javascript" src="//code.jquery.com/jquery-2.1.0.js"></script>
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script type="text/javascript">
  $('#form-signin').validate({

  });

</script>

<div id="result">

  </div>
  </div>
  

</body>

</html>
