<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">   
Number: 
<input type="number" name="amount">   
<br><br>   
<input type = "submit" name = "submit"> 
<br>  
</form>
<?php   
if(isset($_POST['submit']))  
    {   
$number = $_POST["amount"]; 
  
if($number % 2 == 0){ 
        echo "Even";  
    } 
    else{ 
        echo "Odd"; 
    } 
}   
?>   
</body>
</html>