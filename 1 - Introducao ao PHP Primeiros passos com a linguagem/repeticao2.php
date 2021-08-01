<?php 

// Todo - Contador inicia em 1 Contador é menor ou igual a 15. Executa o codigo incrementado contagem + 1

$contador += 1; // Contador recebe o valor do contador + 1 | 123456789

for ($contador  = 1; $contador <= 15; $contador++) {
        if ($contador == 13) {
          break;
           
        } 
         echo  "# $contador" . PHP_EOL;
  
}



?>