<?php 

class Veiculo
{

  private $numeroDeRodas;
  private $cor;
  private $numeroDePortas;
  private $modelo;
  private $ligado;
  private $combustivel;

  
   public function __construct(int $numeroDeRodas, string $cor, int $numeroDePortas, string $modelo )
  
    {
      
      $this->numeroDeRodas = $numeroDeRodas;
      $this->cor = $cor;
      $this->numeroDePortas = $numeroDePortas;
      $this->modelo = $modelo;
      $this->ligado = false;
    
    }

   public function ligar()
  {
      $this->ligado = true;
      echo "Carro Ligado";
    }


     public function pararVeiculo()
    {
          //Code 
      }

     public function dirigir()
    {
           //Code
      }


       public function acelerar()
      {
            // Code 
        }

         public function mostrarStatus ()
        {
             return $this->ligado;  
          }


     public function tipoCombustivel ()
    {
      // Polimorfismo. Funções ou métodos com o mesmo nome podem fazer as coisas de maneira diferente.
    // Gasolina ou Disel
      }






  
}







?>