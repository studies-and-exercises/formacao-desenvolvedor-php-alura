<?php 


$x = 0;
$y = 1;

for($i=0; $i <= 10; $i++) {
  
  $z = $x + $y;
  echo $z. PHP_EOL;
  $x=$y;
  $y=$z;
}

?>