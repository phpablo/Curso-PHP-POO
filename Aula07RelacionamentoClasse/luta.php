<?php
require_once 'Lutador.php';

class Luta
{

  //Atributos
  private $desafiado;
  private $desafiante;
  private $rounds;
  private $aprovada;

  //Métodos
  public function marcarLuta($l1, $l2)
  {
    if ($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2) {
      $this->aprovada = true;
      $this->desafiado = $l1;
      $this->desafiante = $l2;
    } else {
      $this->aprovada = false;
      $this->desafiado = null;
      $this->desafiante = null;
    }
  }
  function lutar()
  {
    if ($this->aprovada) {
      $this->desafiado->apresentar();
      $this->desafiante->apresentar();
      $vencedor = rand(0, 2);
      switch ($vencedor) {
        case 0: //Empate
          echo "<p>Empate!</p>";
          $this->desafiado->empatarLuta();
          $this->desafiante->empatarLuta();
          break;
        case 1: //Desafiado Vence
          echo "<p>" . $this->desafiado->getNome() . " venceu!<p/>";
          $this->desafiado->ganharLuta();
          $this->desafiante->PerderLuta();
          break;
        case 2: //Desafiante Vence
          echo "<p>" . $this->desafiante->getNome() . " venceu!<p/>";
          $this->desafiante->ganharLUta();
          $this->desafiado->perderLuta();
          break;
      }
    } else {
      echo '<p>Luta não pode acontecer!</p>';
    }
  }

  //Getters
  function getDesafiado()
  {
    return $this->desafiado;
  }
  function getDesafiante()
  {
    return $this->desafiante;
  }
  function getRounds()
  {
    return $this->rounds;
  }
  function getAprovada()
  {
    return $this->aprovada;
  }

  //Setters
  function setDesafiado($d)
  {
    $this->desafiado = $d;
  }
  function setDesafiante($dd)
  {
    $this->desafiante = $dd;
  }
  function setRounds($r)
  {
    $this->rounds = $r;
  }
  function setAprovada($a)
  {
    $this->aprovada = $a;
  }
}
