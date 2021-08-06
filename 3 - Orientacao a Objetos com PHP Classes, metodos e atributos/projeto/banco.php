<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';

$primeiraConta = new Conta(new Titular ('126.254.187-10', 'Vinicus'));

$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular();
echo $primeiraConta->recuperaCpfTitular();
echo $primeiraConta->recuperaSaldo(). PHP_EOL;

$segundaConta = new Conta(new Titular('126.254.188.11', 'Pedro'));
// var_dump($segundaConta);


$terceiraConta = new Conta(new titular('126.254.189-18', 'Lucia'));

$quartaConta = new Conta(new Titular('125.156.189.15', 'Adolfo'));
var_dump($quartaConta);

// $outra = new Conta('123', 'Acdefgb');

// /Conta::$numeroDeContas = 1234;


echo Conta::recuperaNumeroDeContas();