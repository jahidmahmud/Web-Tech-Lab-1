
 <?php 
 session_start();

    if(isset($_POST["submit"])){
  $user = new User($name,$email,$gender);
  $namee=$user->get_name();

  $emaile=$user->get_email();

  $gendere= $user->get_gender();
  if($namee!="" && $emaile!="" && $gendere!=""){
  echo $namee;
$_SESSION["name"]=$namee;
$_SESSION["email"]=$emaile;
$_SESSION["gender"]=$gendere;
}
}
 ?>


<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
  <?php
class User
 {
  
  public $name;
  public $email;
  public $gender;
  public $password;
  
   function __construct($name,$email,$gender,$password) 
   {
     
    $this->name = $name;
  
  $this->email = $email;
  
  $this->gender = $gender;

  $this->password=$password;
   }
  

  
  function set_name($name) {
    $this->name = $name;
  }
  
  function get_name() 
  {
    return $this->name;
  }
   function set_email($email)
   {
    $this->email = $email;
  }
  function get_email()
  {
    return $this->email;
  }
  function set_gender($gender)
  {
    $this->gender = $gender;
  }
  function get_gender()
  {
    return $this->gender;
  }

   function set_password($password)
  {
    $this->password = $password;
  }
  function get_password()
  {
    return $this->password;
  }
}
?>

  <?php
$nameErr = $emailErr = $genderErr =$passErr="";
$name = $email = $gender =$password="";

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

  if (empty($_POST["gender"])) {
    $genderErr= "gender required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

if (empty($_POST["password"])) {
    $passErr= "password is required";
  } else {
    $password = test_input($_POST["password"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$password)) {
      $passErr = "Only letters and white space allowed";
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
<form action="page2.php" method="post">
  <b>Name:</b>
  <input type="text" name="name">
  <span style="color: red"><b>*<?php echo $nameErr;?></b></span>
  <br><br>
  <b>Email:</b>
  <input type="email" name="email">
  <span style="color: red"><b>*<?php echo $emailErr;?></b></span>
  <br><br>
  <b>Gender:</b>
  <input type="radio" name="gender" value="male" > Male
  <input type="radio" name="gender" value="female" > Female
  <input type="radio" name="gender" value="other" > Other
  <span style="color: red"><b>*<?php echo $genderErr;?></b></span>
  <br><br>
  <b>Password:</b>
  <input type="password" name="password">
  <span style="color: red"><b>*<?php echo $passErr;?></b></span>
  <br><br>
  <input type="submit" name="submit" value="submit" style="color: blue" style="height:600px;width:600px">
  </fieldset>
</form>

</body>
</html>