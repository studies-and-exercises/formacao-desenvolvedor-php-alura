<?php

// Todo - Array associoativo

$conta1 = [

  'titular' => "Vinicius",
  'saldo' => 1000,
  
];

$conta2 = [

  'titular' => 'Maria',
  'saldo' => 2000
  
];

$conta3 = [
  'titular' => 'Pedro',
  'saldo' => 3000
  
];

// echo $conta1['titular'];

$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i++) {

  echo $contasCorrentes[$i] ['titular'] . PHP_EOL;
}







?>