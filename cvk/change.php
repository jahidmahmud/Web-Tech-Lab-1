<?php
session_start();
  $id=$_POST['id'];
  $npassword=$_POST['npassword'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydb";
  $conn = new mysqli($servername, $username, $password,$dbname)or die("connection error");
  $sql = "UPDATE info SET password='$npassword',cpassword='$npassword' WHERE id=$id";

   if ($conn->query($sql) === TRUE) {
    header("location: welcome.php");
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  $conn->close();
 ?>