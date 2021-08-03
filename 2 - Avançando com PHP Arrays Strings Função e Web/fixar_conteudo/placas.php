<?php

$carros = [

  'PMS-1020' => [
    "modelo" => "Bravo",
    "marca" => "Fiat",
    "dono" => "Pedro"
  ],

  'RMS-1022' => [
    "modelo" => "Fiesta Hatch",
    "marca" => "Ford",
    "dono" => "Karla"
  ],

  'SMS-1025' => [
    "modelo" => "Kicc",
    "marca" => "Nissan",
    "dono" => "Alvaro"
  ],

];

foreach ($carros as $veiculos => $placas) {
  
  echo $veiculos . " " . $placas['modelo'] . PHP_EOL;
}



?>