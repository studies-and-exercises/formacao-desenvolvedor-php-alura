<?php

function sacar(array $conta, float $valorASacar): array
{
  if ($valorASacar > $conta['saldo']) {
    exibeMensagem("Voce nao pode sacar esse valor. Saldo insuficiente");
  } else {
    $conta['saldo'] -= $valorASacar;
  }
  return $conta; 
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

  echo $mensagem .'<br/>';
}


function titularComLetrasMaiusculas(array &$conta) {
    
    $conta['titular']  =   mb_strtoupper($conta['titular']);

}


function exibeConta( array $conta) {

['titular' => $titular, 'saldo' => $saldo] = $conta;
 echo "<li>Titular: $titular. Saldo: $saldo</li>";
  
}







?>