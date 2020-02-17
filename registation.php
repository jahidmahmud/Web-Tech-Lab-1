
  <!DOCTYPE html>
<html>
<head>
	<title>Registation Formm</title>
</head>
<body>
	
	<form action="s.php" method="post">
		<fieldset>
			<legend><b>Registation</b></legend>
  Name:
  <input type="text" name="name"><br>
  <hr>
  Email:
  <input type="text" name="email"><br>
  <hr>
  User Name:
  <input type="text" name="uname"><br>
  <hr>
  Password:
  <input type="Password" name="password"><br>
  <hr>
  Confirm Password:
  <input type="Password" name="cpassword"><br>
  <hr>
  <fieldset>
  <legend>Gender</legend>
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="others">Others
  <br>
  </fieldset>
  <hr>
  <fieldset>
  	<legend>Date of Birth</legend>
  <input type="Date" name="date">(dd/mm/yyyy)
  <br>
  </fieldset>
  <hr>

  <input type="submit" value="Submit">
  </fieldset>
</form>

</body>
</html>
