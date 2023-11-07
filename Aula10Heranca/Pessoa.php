<?php

class Pessoa
{
  private $nome;
  private $idade;
  private $sexo;

  // Método Publico
  public function fazerNiver()
  {
    $this->idade++;
  }

  // Método Setters 
  function setNome($nome)
  {
    $this->nome = $nome;
  }
  function setIdade($idade)
  {
    $this->idade = $idade;
  }
  function setSexo($sexo)
  {
    $this->sexo = $sexo;
  }

  // Método Getters
  function getNome()
  {
    return $this->nome;
  }
  function getIdade()
  {
    return $this->idade;
  }
  function getSexo()
  {
    return $this->sexo;
  }
}
