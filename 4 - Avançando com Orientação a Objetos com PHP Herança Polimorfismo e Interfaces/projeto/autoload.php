<?php

// require_once 'src/Modelo/Endereco.php';

spl_autoload_register(function (string $nomeCompletoDaClass) {

  $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClass);
  $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
  $caminhoArquivo .= '.php';

  if (file_exists($caminhoArquivo)) {
    require_once $caminhoArquivo;
  } 
});


?>