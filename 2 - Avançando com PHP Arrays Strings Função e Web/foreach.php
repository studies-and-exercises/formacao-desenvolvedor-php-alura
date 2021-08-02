<?php

// Todo - Como percorrer e imprimir todos os valores de uma matriz associativa?
// Iremo usar o foreach

$contasCorrentes = [
  
  '123.456.789-10' => [
    
  'titular' => "Vinicius",
  'saldo' => 1000,

  ],
  '123.456.789-11' => [

  'titular' => 'Maria',
  'saldo' => 2000

],
  '123.456.789-12' =>  [
  'titular' => 'Pedro',
  'saldo' => 3000

  ],
];

$contasCorrentes['123.456.790-12'] = [
  'titular' => 'Afonso',
  'saldo' => 2300
];

// Pra cada elemento do meu array contasCorrentes as cpf associada a contas  
// Mostre o seu valor associado 
foreach($contasCorrentes as $cpf => $contas) {

  echo $cpf . " " .  $contas['titular'] . PHP_EOL;
}

?>