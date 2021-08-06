<?php 

class Titular 

{

  private $cpf;
  private $nome;

public function __construct(string $cpf,  string $nome)
{

  $this->$cpf = $cpf;
  $this->validaNomeTitular($nome);
  $this->$nome = $nome;
  
}

public function recuperaCpf() 
{

   return $this->cpf;
  
}

public function recuperaNome()

{

  return $this->nome;
  
}

 public function recuperaNomeTitular()
{
      return $this->titular->recuperaNome();
  }

  public function recuperaCpfTitular()
  {
    return $this->titular->recuperaCpf();
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