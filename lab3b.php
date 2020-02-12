<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
</head>
<body>
  <?php
$nameErr = $emailErr = $genderErr = $bDayErr =$degreeErr=$bloodErr="";
$name = $email = $gender = $degree = $dob =$bg="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr= "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr= "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["bday"])) {
    $bDayErr= "dob required";
  } else {
    $dob = test_input($_POST["bday"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr= "gender required";
  } else {
    $gender = test_input($_POST["gender"]);
  }


  if (empty($_POST["deg"])) {
    $degreeErr= "degree is required";
  } 
  else {
    $degree = test_input($_POST["deg"]);
  }


  if (empty($_POST["blood"])) {
    $bloodErr= "BG is required";
  } else {
    $bg = test_input($_POST["blood"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
  <fieldset style="border:2px solid Tomato; color: green">
    <legend style="color: SlateBlue"><h3><b>Personal Info</b></h3></legend>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <b>Name:</b>
  <input type="text" name="name" value="<?php echo $name;?>">
  <span style="color: red"><b>*<?php echo $nameErr;?></b></span>
  <br><br>
  <b>Email:</b>
  <input type="email" name="email" value="<?php echo $email;?>">
  <span style="color: red"><b>*<?php echo $emailErr;?></b></span>
  <br><br>
  <b>Date Of Birth:</b>
  <input type="date" name="bday" value="<?php echo $dob;?>">
  <span style="color: red"><b>*<?php echo $bDayErr;?></b></span>
  <br><br>
  <b>Gender:</b>
  <input type="radio" name="gender" value="male" 
  <?php if (isset($gender) && $gender=="male") echo "checked";?>
  value="male" > Male
  <input type="radio" name="gender" value="female" 
  <?php if (isset($gender) && $gender=="female") echo "checked";?>
  value="female"> Female
  <input type="radio" name="gender" value="other" 
  <?php if (isset($gender) && $gender=="other") echo "checked";?>
  value="other" > Other
  <span style="color: red"><b>*<?php echo $genderErr;?></b></span>
  <br><br>
  <b>Degree:</b>
  <input type="checkbox" name="deg"  value="ssc" 
  <?php if (isset($degree) && $degree=="ssc") echo "checked";?>> SSC
  <input type="checkbox" name="deg"  value="hsc"
  <?php if (isset($degree) && $degree=="hsc") echo "checked";?>>HSC
  <input type="checkbox" name="deg"  value="bsc"
  <?php if (isset($degree) && $degree=="bsc") echo "checked";?>>BSc
  <input type="checkbox" name="deg"  value="msc"
  <?php if (isset($degree) && $degree=="msc") echo "checked";?>>MSc
  <span style="color: red"><b>*<?php echo $degreeErr;?></b></span>
  <br><br>
  <b>Blood Group:</b>
  <select name="blood" >
  <option value="b+" 
  <?php if (isset($bg) && $bg=="b+") echo "selected";?>>B+</option>
  <option value="a+" 
  <?php if (isset($bg) && $bg=="a+") echo "selected";?>>A+</option>
  <option value="ab+" 
  <?php if (isset($bg) && $bg=="ab+") echo "selected";?>>AB+</option>
  <option value="o+"
  <?php if (isset($bg) && $bg=="o+") echo "selected";?>>O+</option>
  </select>
  <span style="color: red"><b><?php echo $bloodErr;?></b></span> 
  <br><br>
  <input type="submit" name="submit" value="Submit" style="color: blue" style="height:600px;width:600px">
  </fieldset>
</form>
<?php
echo "<b><h2>Your Input:</h2></b>";
echo $name;
echo "<br>";
echo $email; 
echo "<br>";
echo $dob; 
echo "<br>";
echo $gender; 
echo "<br>";
echo $degree; 
echo "<br>";
echo $bg; 
echo "<br>";
?>
</body>
</html>