//Todo - Exibir a tabuada de determinado número

// Preciso de uma variavel para armazenar o valor e partir deste número armazenar um variavel.
// De 1 até 9 qual o resultado da multiplicação deste número.

Pra isso eu preciso usar uma estrutura de repetição.

Qual: while ou for.

O "FOR" é mais PRÁTICO quando você souber o valor inicial e final, ou seja, quantas vezes você repetirá o bloco, e o
"WHILE" quando você puder repetir "infinitamente" uma ação, até que uma condição seja FALSA.

<?php


// $a = 1;

// // Todo - Enquanto a for menor que o 8 escreva
// while ($a <=9) {

//   for($i = 0; $i <= 10; $i++) {

//     echo "$a * $i = " . $a * $i;
//     echo PHP_EOL;
//   }
//   echo PHP_EOL;
//   $a++;

// }


// for ($a = 1; $a <= 9; $a++) {

//   echo $a . PHP_EOL;

//   for ($i = 1; $i <= 10; $i++) {

//     echo "$a * $i = " . $a * $i;
//     echo PHP_EOL;
//   }
// }


$multiplicador = 3;

for ($i = 1; $i < 10; $i++) {
  $resultado = $multiplicador * $i;

  echo "$multiplicador x  $i = " . $resultado . PHP_EOL;
}




?>