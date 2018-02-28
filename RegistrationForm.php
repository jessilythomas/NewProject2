<?php
	include 'dbConfig.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<!--<script type="text/javascript">
	$(document).ready(function()
{
	var username=document.getElementById("username").value;
	var password=document.getElementById("password").value;
	var dataString = '&username=' + username + '&password=' + password;
	$.ajax({
type: "POST",
url: "RegistrationFormNew.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
	});


</script>
-->


<script type="text/javascript">
$(document).ready(function(){
    $("form").submit(function(event){
        event.preventDefault();
        var formValues = $(this).serialize();
        $.post("RegistrationFormNew.php", formValues, function(data){
            $("#result").html(data);
        });
    });
});
</script>

</head>
<body>
</br>
</br>

<form method="POST" action="" align="center" name="formnew">
	<input type="text" name="name" placeholder="Name">
</br>
</br>

	<input type="text" name="phone" placeholder="Mobile ">
</br>
</br>

	<input type="text" name="username" placeholder="Username ">
</br>
</br>

	<input type="password" name="password" placeholder="Password ">
</br>
</br>

<button  type="submit">Register</button> 
<a href="login.php">Login</a>
</form>
 <div id="result"></div>
</body>
</html>