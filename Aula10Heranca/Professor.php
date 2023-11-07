<?php
require_once 'Pessoa.php';

class Professor extends Pessoa
{
  private $especialidade;
  private $salario;

  //Método Público
  function receberAumento($aum)
  {
    $this->salario += $aum;
  }

  // Método Getter 
  function getEspecialidade()
  {
    return $this->especialidade;
  }
  function getSalario()
  {
    return $this->salario;
  }

  // Método Setter 
  function setEspecialidade($esp)
  {
    $this->especialidade = $esp;
  }
  function setSalario($sal)
  {
    $this->salario = $sal;
  }
}
