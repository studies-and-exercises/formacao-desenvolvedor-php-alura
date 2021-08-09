<?php

require_once "src/Veiculo.php";

$audi = new Veiculo(4, "Preto", 4, "WT ");
var_dump($audi);


$polo = new Veiculo(4, "Vermelho", 4, "Volkswagen Polo ");
var_dump($polo);

$audi->ligar(true);

echo $audi->mostrarStatus();


?>"