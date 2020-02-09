<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<fieldset>
		<legend>Personal Info</legend>
<form action="mylab.php" method="post">
  Name:
  <input type="text" name="name"><br><br>
  Email:
  <input type="email" name="email"><br><br>
  Date Of Birth:
  <input type="date" name="bday"><br><br>
  Gender:
  <input type="radio" name="gender" value="male"> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other<br><br>
  Degree:
  <input type="checkbox" name="deg" value="ssc"> SSC
  <input type="checkbox" name="deg" value="hsc">HSC
  <input type="checkbox" name="deg" value="bsc">BSc
  <input type="checkbox" name="deg" value="msc">MSc<br><br>
  Blood Group:
  <select name="blood">
  <option value="b+">B+</option>
  <option value="a+">A+</option>
  <option value="ab+">AB+</option>
  <option value="o+">O+</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
  </fieldset>
</form>
</body>
</html>