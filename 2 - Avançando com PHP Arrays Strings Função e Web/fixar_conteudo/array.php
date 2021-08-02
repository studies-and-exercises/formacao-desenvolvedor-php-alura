<?php

$carros = [

  'LMS-2312' => [
  "modelo" => "Civic",
  "marca" => "Honda",
  "dono" => "Roger"
  ],

  'PMS-1020' => [
    "modelo" => "Bravo",
    "marca" => "Fiat",
    "dono" => "Pedro"
  ],

  'JMS-1125' => [
    "modelo" => "Golf",
    "marca" => "VolksWagem",
    "dono" => "Guilherme"
  ],

];

$carros['VMT - 1126'] = [
  "modelo" => "Fiesta",
  "marca" => "Ford",
  "dono" => "Joao"
];

echo "Marca do Carro e Placa" . PHP_EOL;

foreach($carros as $placa => $carro) {

  echo $placa . " " . $carro['modelo'] . PHP_EOL;
  
}



?>