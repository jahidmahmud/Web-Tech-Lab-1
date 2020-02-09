<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">   
Number1: 
<input type="number" name="amount1">   
<br><br>   
Number2: 
<input type="number" name="amount2">   
<br><br>  
Number3: 
<input type="number" name="amount3">   
<br><br>  
<input type = "submit" name = "submit"> 
<br>  
</form>
<?php   
if(isset($_POST['submit']))  
    {   
$a = $_POST["amount1"]; 
$b = $_POST["amount2"]; 
$c = $_POST["amount3"]; 
  
if($a>$b && $a>$c)
{
echo "Greater value is $a";
}
else if($b>$a && $b>$c)
{
echo "Greater value is $b";
}
else if($c>$a && $c>$b)
{
echo "Greater value is $c";
}
else
{
echo"Dont Enter Equal Values";
}
}   
?>   
</body>
</html>