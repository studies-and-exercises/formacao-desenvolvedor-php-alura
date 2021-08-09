<?php 

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$vinicius = new Titular (new CPF("126.254.187-11"), "Vinicius Dias");
$primeiraConta = new Conta($vinicius);

$primeiraConta->deposita(500);

$primeiraConta->saca(50);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;


$patricia = new Titular(new CPF("126.254.187-12"), "Patricia");
$segundaConta = new Conta($patricia);

var_dump($segundaConta);

// echo json_encode($primeiraConta);


$outra = new Conta(new Titular(new CPF("123.534.123-10"), "Abc"));



echo Conta::recuperaNumeroDeContas() . PHP_EOL;

echo Conta::recuperaAgencia();







?>