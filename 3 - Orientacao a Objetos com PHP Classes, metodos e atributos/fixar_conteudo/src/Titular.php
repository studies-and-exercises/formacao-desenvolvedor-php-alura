<?php 

class Titular {

  private $nome;
  private $cpf;

  public function __construct(CPF $cpf, string $nome)
  {
    
    $this->nome = $nome;
    $this->validaNomeTitular($nome);
    $this->cpf = $cpf;
    
  }

  
  public function recuperaCpf(): string

  {
   
    return $this->cpf->recuperaNumero();
    
  }

  public function recuperaNome()

  {
    return $this->nome;
  }


  private  function validaNomeTitular(string $nomeTitular)
  {
    if (strlen($nomeTitular) < 5) {
      echo 'Nome precisa ter pelo menos 5 caracteres';
      exit();
    }
  }




  
}








?>