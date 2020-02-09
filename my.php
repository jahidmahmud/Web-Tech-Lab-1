<?php
define("get","welcome");
echo get;
$x=29;
echo "<br>";
if ($x<20) {
  echo "less than 20";
  # code...
}
elseif ($x>20) {
  echo "greater than 20";
  # code...
}
else {
echo "you are mf";
}
echo "<br>";
$y=1;
switch ($y) {
  case '1':
  echo "1st case";
    # code...
    break;

  default:
    # code...
    echo "default case";
    break;
}
<br>
$car = array("ax","ye","ze");
for($i=0;$i<3;$i++)
{
  echo "$car[$i] <br>";
}
 ?>
