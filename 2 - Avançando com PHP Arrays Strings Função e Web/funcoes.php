<?php

function sacar(array $conta, float $valorASacar): array
{
  if ($valorASacar > $conta['saldo']) {
    exibeMensagem("Voce nao pode sacar esse valor. Saldo insuficiente");
  } else {
    $conta['saldo'] -= $valorASacar;
  }
  return $conta; // Preciso devolver para chamada da funcao sacar o parametro $conta / pra que seja armazenado em $contasCorrentes['123.456.789-10']
}

function depositar(array $conta, float $valorADepositar): array

{
  if ($valorADepositar > 0) {
    $conta['saldo'] += $valorADepositar;
  } else {
    exibeMensagem("Deposito precisam ser positivos!");
  }

  $conta['saldo'] += $valorADepositar;
  return $conta;
}

function exibeMensagem(string $mensagem)
{

  echo $mensagem . PHP_EOL;
}


function titularComLetrasMaiusculas(array &$conta) {
    
    $conta['titular']  =   mb_strtoupper($conta['titular']);

}







?>