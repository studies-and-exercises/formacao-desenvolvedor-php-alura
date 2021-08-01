<?php 

// Todo - Calcular o  IMC de uma pessoa

// A partir do peso e altura de uma pessoa. Calcule o IMC
// Exibir para usuário se o IMC está abaixo, dentro ou acima do recomentado
// Formula: imc = peso / (altura * altura).


$peso = 120;
$altura = 1.74;
$imc = $peso / $altura ** 2;
$nome = "Renato";

echo " Olá, $nome seu IMC é de $imc" . PHP_EOL;

if($imc < 18.5) {

  echo "Você está abaixo do peso";
  
} else if ($imc < 25.0) {
  
  echo "Você está com peso Normal";
  
} else {
  
  echo "Você está acima do peso";
}















?>