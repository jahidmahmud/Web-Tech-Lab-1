<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">   
Width: 
<input type="number" name="width">   
<br><br>   
Length: 
<input type="number" name="length"> <br>  <br>  
<input type = "submit" name = "submit"> 
<br>  
</form>     
<?php   
if(isset($_POST['submit']))  
    {   
$width = $_POST["width"];   
$length = $_POST["length"];   
$area = $width*$length; 
$perimeter= 2*($length+$width);
echo "The area of a rectangle with is $area";   
echo "<br>";
echo "<br>";
echo "The perimeter of a rectangle with is $perimeter";  
}   
?>   

</body>
</html>