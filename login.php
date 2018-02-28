<?php
	include 'dbConfig.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("form").submit(function(event){
        event.preventDefault();
        var formValues = $(this).serialize();
        $.post("LoginNew.php", formValues, function(data){
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
	<input type="text" name="username" placeholder="Username">
</br>
</br>

	<input type="text" name="password" placeholder="Password ">
</br>
</br>

<button  type="submit">Login</button> 
</form>
<div id="result"></div>

</body>
</html>