<?php
$number1 = htmlspecialchars($_POST["number1"]);
$number2 = htmlspecialchars($_POST["number2"]);
$result=$number1+$number2;
echo "$result";
?>