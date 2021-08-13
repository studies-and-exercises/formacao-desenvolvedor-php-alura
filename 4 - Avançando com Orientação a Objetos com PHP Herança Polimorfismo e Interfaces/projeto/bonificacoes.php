<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\EditorVideo;
use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\ControladorDeBonificacoes;


$umFuncionario = new Desenvolvedor(
    'Vinicius Dias',
    new  CPF('126.437.188-10'),
    '1000'
);

$umFuncionario->sobeDeNivel();

$umFuncionaria = new Gerente(
    'Patricia',
    new  CPF('987.654.321-10'),
    '3000'
);

$umDiretor = new Diretor(
    'Renato Lazaro',
    new CPF('126.427.188-12'),
    5000
);

$umDesenvolvedor = new Desenvolvedor(
    'Fabio',
    new CPF('126.457.188-17'),
    2000
);

$umEditor = new EditorVideo(
    'Paulo',
    new CPF('456.987.231-11'),
    1500
);



$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umDesenvolvedor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();