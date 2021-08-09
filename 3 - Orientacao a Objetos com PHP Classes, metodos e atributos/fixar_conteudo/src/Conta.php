<?php 

class Conta {

private $titular;
private $saldo;
private static $numeroDeContas = 0;
private static $agencia;


public function __construct( Titular $titular) // Recebendo como parametro o titular

{

   $this->titular = $titular;
   $this->saldo = 0;
   self::$agencia = 4293;
   
   self::$numeroDeContas++;

}

public function saca(float $valorASacar): void

{

  if($valorASacar > $this->saldo) {
    
    echo "Saldo insuficiente! Voce nao pode sacar.";
    return;
  }

  $this->saldo -= $valorASacar;
  
}

public function deposita(float $valorADepositar): void

{

  if($valorADepositar < 0 ) {

    echo "O valor informado deve ser maior que 0.";
    return;
  }
  
  $this->saldo += $valorADepositar;
}

public function recuperaSaldo()

{
  return $this->saldo;
}

 public function recuperaNomeTitular(): string
{
  
  return $this->titular->recuperaNome();
 
  }

   public function recuperaCpfTitular(): string
  {
         return $this->titular->recuperaCpf();
    }
    
  public static function recuperaNumeroDeContas(): int

  {

    return self::$numeroDeContas;    
  }

  public static function recuperaAgencia()

  {
      return self::$agencia;
  }


}