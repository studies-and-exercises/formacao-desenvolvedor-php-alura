<?php

$contasCorrentes = [
  
  '123.456.789-10' => [
    
  'titular' => "Vinicius",
  'saldo' => 1000,

  ],
  '123.456.789-11' => [

  'titular' => 'Maria',
  'saldo' => 200

],
  '123.456.789-12' =>  [
  'titular' => 'Pedro',
  'saldo' => 3000

  ],
];

$contasCorrentes['123.456.789-10'] ['saldo'] -= 500;

if(500 > $contasCorrentes['123.456.789-11']['saldo']) {
  
  echo "Voce nao pode sacar este valor" . PHP_EOL;
} else {

  $contasCorrentes['123.456.789-11']['saldo'];
}


// Pra cada elemento do meu array contasCorrentes as cpf associada a contas  
// Mostre o seu valor associado 
foreach($contasCorrentes as $cpf => $contas) {

  echo $cpf . " " .  $contas['titular']  . " " . $contas['saldo']   . PHP_EOL;
}