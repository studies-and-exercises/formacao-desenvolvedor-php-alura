<?php

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';


$conta = new Conta(
  new Titular(
    new CPF('128.524.227-10'), 
    'Pedro',  
    new Endereco('Vitoria', 'Porto', 'La', '41')));

$conta->deposita(500);

$conta->saca(100);

echo $conta->recuperaSaldo();












?>