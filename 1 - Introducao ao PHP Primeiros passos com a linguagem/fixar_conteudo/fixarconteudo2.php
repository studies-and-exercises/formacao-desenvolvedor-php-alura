<?php 

$idade = 18;
$numeroDePessoas = 0;


if ($idade >= 18)  {

 echo "Você tem $idade anos. Então você pode entrar.";
 
  
} else if($idade >=16 && $numeroDePessoas > 1) {

  echo "você tem $idade anos e está acompanhada (o). Então pode entrar.";
  
} else {

  echo "Você tem $idade anos e nao está acompnhada. Então você não pode entrar.";
}



?>