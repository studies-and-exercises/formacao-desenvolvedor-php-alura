<?php

// Todo - O que e um arry
// Um array armazena mais de um valor em uma variavel, ou seja, recebe chave e < class="


$listaDeIdade = [21, 23, 19, 25, 30, 41, 18];

// Remover o item do meu array na posicao 2
unset($listaDeIdade['2']);

// Como pegar as 3 primeiras idades?

list($idadeMaria, $idadeMaria) = $listaDeIdade;

$listaDeIdade [] = 20;

foreach($listaDeIdade as $idade ) {
  
  echo $idade . PHP_EOL;
}





?>