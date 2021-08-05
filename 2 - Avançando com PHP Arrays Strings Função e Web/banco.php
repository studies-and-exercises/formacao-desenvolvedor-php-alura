<?php

require_once("funcoes.php");

$contasCorrentes = [

  '123.456.789-10' => [

    'titular' => "Maria",
    'saldo' => 10000,

  ],
  '123.456.689-11' => [

    'titular' => 'Alberto',
    'saldo' => 300

  ],
  '123.256.789-12' =>  [
    'titular' => 'Vinicus',
    'saldo' => 100

  ],
];

unset($contasCorrentes['123.456.689-11']);

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 0.50);
// $contasCorrentes['123.456.689-11'] = sacar($contasCorrentes['123.456.689-11'], 500);

$contasCorrentes['123.256.789-12'] = depositar($contasCorrentes['123.256.789-12'],  200);


titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Alura</title>
</head>

<body>

  <h1>Contas Correntes</h1>

  <dl>

    <!-- Para cada item (na variável $contasCorrentes, coloque o índice na variável $cpf e o valor na variável $conta) -->
    <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
    <dt>
      <h3>
        <?= $conta['titular']; ?> - <?=  $cpf; ?><h3>
    </dt>
    <dd>Saldo: <?= $conta['saldo']; ?></dd>
    <?php } ?>

  </dl>

</body>

</html>