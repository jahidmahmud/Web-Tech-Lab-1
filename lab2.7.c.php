
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
  
$num = 65; 
    for ($i = 0; $i < $number; $i++) 
    { 
        for ($j = 0; $j <= $i; $j++ ) 
        { 
            $ch = chr($num); 
              echo $ch." "; 
            $num = $num + 1; 
        } 
        echo "<br>";
    }
  
}  
?>   
</body>
</html>