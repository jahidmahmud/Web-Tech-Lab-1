
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
$array = array(45, 5, 1, 22, 22, 10, 10);  
if(isset($_POST['submit']))  
    {   
$number = $_POST["amount"]; 
  
if(array_search($number, $array)){ 
        echo "Found";  
    } 
    else{ 
        echo "Not Found"; 
    } 
}   
?>   
</body>
</html>