<?php

$idade = 16;
$numeroDePessoas = 0;


echo "Voce so pode entrar a partir de 18 anos.";
echo "A partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18 ) {
    echo "Voce tem $idade anos.  Pode entrar sozinha." ; 
    
} else if ($idade >= 16 && $numeroDePessoas > 1){
echo "Voce so tem $idade anos, esta acompanhado (a), entao pode entrar.";
    
  } else {
    echo "Voce so tem $idade anos. Voce nao pode entrar.";
  }
  

echo PHP_EOL;
echo "Adeus!";