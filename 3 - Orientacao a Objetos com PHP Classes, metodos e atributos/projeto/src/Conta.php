<?php 

class Conta

{
  
private string  $cpfTitular;
private string $nomeTitular;
private  float $saldo = 0 ;

public function __construct()
{
  echo 'constructor ran...';
}

public function saca(float $valorASacar) 
{

  if($valorASacar > $this->saldo) {

    echo "Saldo indisponivel";
    return;
  }
    
    $this->saldo -= $valorASacar;
  }
  
public function deposita(float $valorADepositar): void

{

  if($valorADepositar <  0) {

      echo "Valor precisa ser positivo";
      return;
    
  }

   $this->saldo += $valorADepositar;
  }
  


 public function transfere(float $valorATransferir, Conta $contaDestino): void
{
    
  if ($valorATransferir > $this->saldo) {
     echo "Valor Indisponivel";
     return;
    
  } 

    $this->saca($valorATransferir);
    $contaDestino->deposita($valorATransferir);
  }

   public function recuperaSaldo (): float
  {
        return $this->saldo;
    }

     public function definirCpfTitular (string $cpf) : void
     {
       
      $this->cpfTitular = $cpf ;
     }
    
      public function recuperaCpfTitular()
    {
           echo $this->cpfTitular;
      }

       public function definirNomeTitular (string $nome)
        {
              $this->nomeTitular = $nome; 
          }


       public function recuperaNomeTitular()
       {
          echo $this->nomeTitular;
       }

  
  }













?>