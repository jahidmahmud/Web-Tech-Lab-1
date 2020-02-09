<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">   
Amount: 
<input type="number" name="amount">   
<br><br>   
<input type = "submit" name = "submit"> 
<br>  
</form>
<?php   
if(isset($_POST['submit']))  
    {   
$a = $_POST["amount"];   
$vat=$a*(15/100);
echo "Vat is $vat";  
}   
?>   
</body>
</html>