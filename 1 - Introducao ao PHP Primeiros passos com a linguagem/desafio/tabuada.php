//Todo - Exibir a tabuada de determinado número

// Preciso de uma variavel para armazenar o valor e partir deste número armazenar um variavel.
// De 1 até 9 qual o resultado da multiplicação deste número

<?php

$a = 1;
while ($a <= 8) {
  for ($i = 0; $i <= 10; $i++) { 
    echo "$a * $i = " . $a * $i;
    echo   PHP_EOL;
  }
  echo PHP_EOL;
  $a++;
}
  







?>