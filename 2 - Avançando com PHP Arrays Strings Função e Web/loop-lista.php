<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18, 45, 55];


for($i = 0;  $i < 7;  $i++){

  echo $idadeList [$i] . PHP_EOL;
  
}

echo count($idadeList);

for ($i = 0; $i <  count($idadeList); $i++) {
 
  echo $idadeList [$i]. PHP_EOL;
  
}

$filmes = ["Liga da Justica", "Homem de Ferro", "X-Men", "Teste"];

for ($i = 0; $i < count($filmes); $i++) {

  echo $filmes [$i]  . PHP_EOL;
  
}



?>