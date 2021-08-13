<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{

    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
  
          {
  
          if ($autenticavel->podeAutenticar($senha)) {
            
            echo "ok. Usuario logado com sucesso";
            
          } else {
            
            echo "Usuario nao pode logar no sistema.";
          }
              
          }




  
}