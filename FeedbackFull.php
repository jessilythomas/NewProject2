<?php
include 'dbConfig.php';

?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Feedback Form</title>
 
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
        $.post("email.php", formValues, function(data){
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

      <h2 class="form-signin-heading">Feedback Form</h2>
  
   
  <?php  
  include 'dbConfig.php';
  session_start();
  $id=$_SESSION["id"];
//echo "$id";
  $query1=$db->query("select r.Name,l.Username from tbl_loginnew l join tbl_registrationnew r on r.Login_id=l.Login_id where r.Login_id='$id' and l.Login_id='$id'");
  while ($row1=$query1->fetch_assoc()) {
  $name=$row1['Name'];
  $username=$row1['Username'];
  
     echo '<input type="email" class="form-control" name="email" placeholder="Email ID" required="" id="email" data-msg-required="plz enter email"  autofocus="" readonly value="'.$row1['Username'].'"/>';
     echo '</br>';
     echo '<input type="text" class="form-control" name="name" placeholder="Name" id="name" required="" autofocus="" data-rule-required="true" data-msg-required="plz enter Name" data-rule-pattern="[a-zA-Z ]" readonly value="'.$row1['Name'].'"/>';
     echo '</br>';
     echo '<span id="Msg-nameerror" style="color: #BA0A0A; text-align:centre;"></span>';
      echo '<textarea name="message" id="message" rows="5" cols="40" placeholder="Message" data-msg-required="plz enter message" autofocus="" class="form-control"></textarea>';
      
      echo '<br />';
 
  }  
?>
    
    <p id="msg"></p>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="but" id="but">Send</button>   
    </form>
     <script type="text/javascript" src="//code.jquery.com/jquery-2.1.0.js"></script>
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript">
  $('#form-signin').validate({

  });
</script>
<script type="text/javascript">
  $(document).ready(function(){

    $('#but').click(function()
    {
      var message=$('#message').val();
      
      if(!message) {
          $error="This field is required.";
           $('#Msg-nameerror').html($error); 
           $('#message').focus();
          
        }
        else 
        {
          $error="";
           $('#Msg-nameerror').html($error);
        }
    })
  })
</script>

<div id="result">
  </div>
  </div>
  </body>
</html>