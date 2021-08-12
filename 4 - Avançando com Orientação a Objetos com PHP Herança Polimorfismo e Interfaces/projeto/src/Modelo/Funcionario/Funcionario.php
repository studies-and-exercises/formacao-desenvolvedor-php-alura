<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;

abstract class Funcionario extends Pessoa

{

  private float $salario;

  public function __construct(string $nome, CPF $cpf, float $salario)
  
  {
    parent::__construct($nome, $cpf);
    $this->salario = $salario;
    
  }
    
    public function recuperaCargo()
    {
        return $this->cargo;
    }

  public function alterNome(string $nome): void

  {

    $this->validaNomeTitular($nome);
    $this->nome = $nome;
  }

      public function recebeAumento(float $valorAumento): void
    
            {
            
              if ($valorAumento < 0) {
                
                echo "O aumento deve ser positivo";
                return;
              } 
                
                $this->salario += $valorAumento;
              
            
                
            }

    public function recuperaSalario (): float
  
          {
        
            return $this->salario;
              
          }
  
   abstract public function calculaBonificacao(): float;
  
}

?>