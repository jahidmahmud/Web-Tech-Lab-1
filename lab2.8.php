<?php
$arr = array(
    array(1,2,3,"A"),
    array(1,2,"B","C"),
    array(1,"D","E","F")
);
  for ($row = 0; $row <3; $row++) {
  for ($col = 0; $col < 3-$row; $col++) {
  		echo $arr[$row][$col];
  }
  echo "<br>";
}
echo "<br>";
echo "<br>"; 
$x=3;
for ($row = 0; $row <3; $row++) {
  for ($col = $x; $col <4 ; $col++) {
  		echo $arr[$row][$col];
  }
  $x--;
  echo "<br>";
}

?>