<?php
include 'dbConfig.php';
$query=$db->query("select country_id,country_name from tbl_countries");
$rowCount=$query->num_rows;
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Bootstrap Snippet: Login Form</title>
 
<!--pop up-->
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--pop up-->



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
        $.post("validation11.php", formValues, function(data){
            $("#result").html(data);
        });
    });
});
</script>

  <!--ajax post jquery-->
  
</head>

<body>
<!--pop up-->
<div class="container" align="center">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
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

<!--pop up-->


    <div class="wrapper">
    <form class="form-signin" id="form-signin" method="post" action="">       
      <h2 class="form-signin-heading">Registration Form</h2>
     
      <input type="text" class="form-control" name="name" placeholder="Name" id="name" required="" autofocus="" data-rule-required="true" data-msg-required="plz enter Name" data-rule-pattern="[a-zA-Z ]" />
    </br>
      <input type="text" class="form-control" name="address" placeholder="Address" id="address" required="" autofocus="" data-rule-required="true" data-msg-required="plz enter Name"/>
      </br>

      <input type="text" class="form-control" name="email" placeholder="Email ID" id="email" required="" autofocus="" data-rule-email="true" data-msg-required="plz enter Email ID"/>
      </br>
      <input type="password" class="form-control" name="password" placeholder="Password" required="" id="password" data-msg-required="plz enter password" data-rule-minlength="5" data-rule-maxlength="9" autofocus=""/>

      <input type="password" class="form-control" name="password1" placeholder="Confirm Password" required="" id="password1" data-msg-required="plz enter password" data-rule-minlength="5" data-rule-maxlength="9"
       data-rule-equalto="#password" autofocus=""/> 
<input type="text" class="form-control" name="phone" placeholder="Mobile Number" required="" id="phone" data-msg-required="plz enter phone number" data-rule-minlength="10" data-rule-maxlength="11" data-rule-number="true" autofocus=""/>
           </br>
         <input type="date" class="form-control" name="dob" placeholder="DOB" id="dob" required="" autofocus="" data-rule-required="true" data-msg-required="plz enter DOB" data-rule-date="true"/>  
       </br>

<select id="country" width="20" class="form-control"  required="" autofocus="" data-rule-required="true" data-msg-required="plz enter country" data-rule-date="true" name="country">
  <option value="">Select Country</option>
<?php
  if($rowCount>0)
  {
    while ($row=$query->fetch_assoc()) {
      
      echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
    }
  }
  else{
    echo '<option value="">Country not available</option>';
  }
?>
 </select>
</br>
 <select id="state" class="form-control"  required="" autofocus="" data-rule-required="true" data-msg-required="plz enter state" data-rule-date="true">
    <option value="">Select country first</option>
</select>

</br>
<select id="city" class="form-control"  required="" autofocus="" data-rule-required="true" data-msg-required="plz enter city" data-rule-date="true">
    <option value="" name="city">Select state first</option>
</select>
</br>




      <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>   

    </form>
     <script type="text/javascript" src="//code.jquery.com/jquery-2.1.0.js"></script>
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script type="text/javascript">
  $('#form-signin').validate({

  });

</script>
<!--drop down -->
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
<!-- drop down-->



<div id="result">

  </div>
  </div>
  

</body>

</html>
