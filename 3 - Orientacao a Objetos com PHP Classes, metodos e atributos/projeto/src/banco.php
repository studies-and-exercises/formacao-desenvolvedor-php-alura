<?php

require_once 'Conta.php';

$primeiraConta = new Conta();
$primeiraConta->deposita(500);
$primeiraConta->saca(300);
echo $primeiraConta->definirCpfTitular('124.256.187-10');


echo $primeiraConta->recuperaSaldo();
echo $primeiraConta->recuperaCpfTitular();


// echo $primeiraConta->recuperarNomeTitular();