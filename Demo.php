<?php
//echo and print
echo "hi";
echo "</br>";
echo 'hi';
echo "</br>";
print('hi');
echo "</br>";
print("hi");
echo "</br>";
 $variable = 'Hello W3docs' ;
   echo  $variable;
echo "</br>";
   $name="Ravi";
echo $name;      
echo ($name);
print('1');
echo "</br>";
$name = "Ravi ";
$profile = "PHP Developer";
$age = 25;
echo $name , $profile , $age, " years old";
echo "</br>";
print '1';
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;
echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;

echo "<h1> hi $x hi </h1>";

$a=1000;
$b=1200;
$c=1400;
echo "<h1> Salary of Mr. A is : $a$ </h1>";
echo "<h2> Salary of Mr. B is : $b$ </h2>";
echo "<h3> Salary of Mr. C is : $c$ </h3>";
//echo and print
//print_r   The print_r() function is used to print human-readable information about a variable.
echo "</br>";echo "</br>";
$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r ($a);
var_dump($a);
$var1='abc';
$var2=123.33;
print_r($var1);
echo'<br>';
print_r($var2);
echo'<br>';
$abc = array('Subj1'=>'Physics','Subj2'=>'Chemistry','Subj3'=>'Mathematics','Class'=>array(5,6,7,8));
print_r($abc);
//print_r   The print_r() function is used to print human-readable information about a variable.
//var_dump  used to display structured information (type and value) about one or more variables.

$var_name1=678;
$var_name2="a678";
$var_name3="678";
$var_name4="W3resource.com";
$var_name5=698.99;
$var_name6=+125689.66;          
echo var_dump($var_name1)."<br>";
echo var_dump($var_name2)."<br>";
echo var_dump($var_name3)."<br>";
echo var_dump($var_name4)."<br>";
echo var_dump($var_name5)."<br>";
echo var_dump($var_name6)."<br>";

//var_dump  used to display structured information (type and value) about one or more variables.

echo 'single quote: \'';
echo 'backslash: \\';
echo 'There\'s a snake in my boots!';
echo'<br>';
$a = "Hello ";
$a .= "World!"; 
echo $a;
echo'<br>';
$a = "Hello ";
$b = $a . "World!";
echo $b;

echo'<br>';
$regex  = "/k/";

// We search for a match inside this string.
$string = "you gotta give the go kart a try";

// preg_match returns true or false.
if(preg_match($regex, $string, $match)) 
{
  echo "We found a match to the expression: " . $match[0];
} 
else 
{
  echo "We found no match.";
}
?>