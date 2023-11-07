<?php
require_once 'Pessoa.php';

class Aluno extends Pessoa
{
  private $matricula;
  private $curso;

  // Método Publico 
  function cancelarMatr()
  {
    echo '<p><strong>Matrícula Cancelada<strong/><p/>';
  }

  // Método Getter 
  function getMatricula()
  {
    return $this->matricula;
  }
  function getCurso()
  {
    return $this->curso;
  }
  //Método Setter
  function setMatricula($ma)
  {
    $this->matricula = $ma;
  }
  function setCurso($cur)
  {
    $this->curso = $cur;
  }
}
