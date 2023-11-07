<?php
require_once 'Pessoa.php';
class Funcionario extends Pessoa
{

  //Atributos
  private $setor;
  private $trabalhando;

  // Método Publico 
  function mudarTrabalho()
  {
    $this->trabalhando = !$this->trabalhando;
  }

  // Métodos Getters 
  function getSetor()
  {
    return $this->setor;
  }
  function getTrabalhando()
  {
    return $this->trabalhando;
  }

  // Métodos Setters
  function setSetor($set)
  {
    $this->setor = $set;
  }
  function setTrabalhando($tra)
  {
    $this->trabalhando = $tra;
  }
}
