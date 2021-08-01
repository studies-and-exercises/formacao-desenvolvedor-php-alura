<?php
// Criar restrinção para acesso a casa noturna.

// Qual a idade  permitida para entrar na Boate
// Se tiver 18 anos ou mais entra 
// Se tiver abaixo de 18 anos não entra.
// Execeção: Pode entrar abaixo de 18 anos acompanhado.

$idade = 18;
$numeroDePessoas = 0;

if ($idade >= 18 ) {
  
  echo "Você tem $idade anos. Pode entrar.";
  
} else  if ($idade >= 16 && $numeroDePessoas > 1){
  
    echo "Você tem $idade anos, e acompanhado (a). Você pode entrar";
    
} else {

  echo " Você tem $idade anos e não está acompanhada . Você não pode entrar.";
}


?>