<?php

require_once ("funcoes.php");



$contasCorrentes = [
  
  '123.456.789-10' => [
    
  'titular' => "Maria",
  'saldo' => 10000,

  ],
  '123.456.689-11' => [
    
  'titular' => 'Alberto',
  'saldo' => 300

],
  '123.256.789-12' =>  [
  'titular' => 'Vinicus',
  'saldo' => 100

  ],
];

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 0.50);
// $contasCorrentes['123.456.689-11'] = sacar($contasCorrentes['123.456.689-11'], 500);

$contasCorrentes['123.256.789-12'] = depositar($contasCorrentes['123.256.789-12'],  200);


titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);


// Pra cada elemento do meu array contasCorrentes as cpf associada a contas  
// Mostre o seu valor associado 
foreach($contasCorrentes as $cpf => $contas) {
  exibeMensagem("$cpf {$contas ['titular'] } {$contas ['saldo'] }");
  
}