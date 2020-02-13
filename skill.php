<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
</head>
<body>
  <?php
class User
 {
  
  public $name;
  public $blood;
  public $email;
  public $gender;
  
   function __construct($name,$email,$gender,$blood) 
   {
     
    $this->name = $name;
  
  $this->email = $email;
  
  $this->gender = $gender;
  
    $this->blood = $blood;
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
  function set_blood($blood)
  {
    $this->blood = $blood;
  }
  function get_blood() 
  {
    return $this->blood;
  } 
}
?>
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

  if (empty($_POST["gender"])) {
    $genderErr= "gender required";
  } else {
    $gender = test_input($_POST["gender"]);
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
echo "<h2>"." data for : ".$name.":</h2>";

$user = new User($name,$email,$gender,$bg);

echo $user->get_name();

echo "<br>";

echo $user->get_email();

echo "<br>";

echo $user->get_gender();

echo "<br>";

echo $user->get_blood();
?>

<?php

$file = fopen("mike.txt", "a") or die("Unable to open file!");

$data = $user->get_name()."\n";

fwrite($file, $data."\n");

$data = $user->get_email()."\n";

fwrite($file, $data."\n");

$data = $user->get_gender()."\n";

fwrite($file, $data."\n");

$data = $user->get_blood()."\n";

fwrite($file, $data."\n");

fclose($file);


?>

<?php

  $dom = new DOMDocument();

    $dom->encoding = 'utf-8';

    $dom->xmlVersion = '1.0';

    $dom->formatOutput = true;

  $xml_file_name = 'list.xml';

    $root = $dom->createElement('Info');

    $movie_node = $dom->createElement('root');

  $child_node_title = $dom->createElement('name', $user->get_name());

    $movie_node->appendChild($child_node_title);

    $child_node_year = $dom->createElement('email', $user->get_email());

    $movie_node->appendChild($child_node_year);

  $child_node_genre = $dom->createElement('gender', $user->get_gender());

    $movie_node->appendChild($child_node_genre);

    $child_node_ratings = $dom->createElement('blood', $user->get_blood());

    $movie_node->appendChild($child_node_ratings);

    $root->appendChild($movie_node);

    $dom->appendChild($root);

  $dom->save($xml_file_name);

  //echo "$xml_file_name has been successfully created";
?>
</body>
</html>