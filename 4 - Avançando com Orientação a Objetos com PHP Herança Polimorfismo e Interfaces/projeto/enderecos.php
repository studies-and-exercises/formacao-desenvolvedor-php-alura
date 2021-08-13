<?php

use Alura\Banco\Modelo\Endereco;

require_once "autoload.php";


$umEndereco = new Endereco(
    'Vitoria',
    'Porto',
    'Rua',
    '41'
);

$outroEndereco = new Endereco(
    'Sao Paulo',
    'Teste',
    'Rua',
    '42'
);


echo $umEndereco . PHP_EOL;
echo $outroEndereco;