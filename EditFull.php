<?php
include 'dbConfig.php';

?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Edit Form</title>
 
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
        $.post("EditFullPhp.php", formValues, function(data){
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


    <div class="wrapper">
      <form class="form-signin" id="form-signin" method="post" action="">  

      <h2 class="form-signin-heading">Edit</h2>
   <?php
   
   session_start();
  $id=$_SESSION["id"];
  $query1=$db->query("select r.Login_id,r.Name,r.Address,r.Mobile,r.Dob,r.image,l.Username,l.Password from tbl_registrationnew r join 
  tbl_loginnew l on l.Login_id=r.Login_id where r.Login_id='$id'");
    $rowcount=$query1->num_rows;
    if($rowcount>0)
    {
  while ($row=$query1->fetch_assoc()) {
      
    echo '<input type="text" class="form-control" name="name" placeholder="Name" id="name" required="" autofocus="" data-rule-required="true" data-msg-required="plz enter Name" data-rule-pattern="[a-zA-Z ]" readonly value="'.$row['Name'].'"/>';
     echo '</br>';
    
     echo' <input type="text" class="form-control" name="address" placeholder="Address" id="address" required="" autofocus="" data-rule-required="true" data-msg-required="plz enter Name" value="'.$row['Address'].'"  />';
      echo '</br>';

      echo '<input type="text" class="form-control" name="email" placeholder="Email ID" id="email" required="" autofocus="" data-rule-email="true" data-msg-required="plz enter Email ID" value="'.$row['Username'].'" readonly/>';
      echo '</br>';
      
       echo '<input type="text" class="form-control" name="phone" placeholder="Mobile Number" required="" id="phone" data-msg-required="plz enter phone number" data-rule-minlength="10" data-rule-maxlength="11" data-rule-number="true" autofocus="" value="'.$row['Mobile'].'"/>';

           echo '</br>';
        
    echo '<p id="msg"></p>
        <input type="file" id="file" name="file" class="form-control" value="'.$row['image'].'"/>';
      echo  '</br>';
      echo "<img src='",$row['image'],"' width='175' height='200' />";
}
}
 ?>
</br></br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Edit</button>   
    </form>
     <script type="text/javascript" src="//code.jquery.com/jquery-2.1.0.js"></script>
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript">
  $('#form-signin').validate({

  });
</script>



<script type="text/javascript">
  $(document).ready(function()
{
$('#file').on('change', function () {
                    var file_data = $('#file').prop('files')[0];
                    var form_data = new FormData();
                    form_data.append('file', file_data);
                    $.ajax({
                        url: 'upload.php', // point to server-side PHP script 
                        dataType: 'text', // what to expect back from the PHP script
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'post',
                        success: function (response) {
                            $('#msg').html(response); // display success response from the PHP script
                        },
                        error: function (response) {
                            $('#msg').html(response); // display error response from the PHP script
                        }
                    });
                });



});
</script>
<!--drop down -->
<!-- drop down-->
<!-- file upload-->

<!-- file upload-->
<div id="result">
  </div>
  </div>
  </body>
</html>