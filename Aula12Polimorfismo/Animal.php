<?php

abstract class Animal
{
  // Atritubos da classe 
  protected $peso;
  protected $idade;
  protected $membros;


  // Atributos abstratos(ñ podem gerar um objeto direto)
  abstract function locomover();
  abstract function alimentar();
  abstract function emitirSom();

  // Getters
  function getPeso() {
    return $this->peso;
  }
  function getIdade() {
    return $this->idade;
  }
  function getMembros() {
    return $this->membros;
  }

  // Setters
  function setPeso($peso){
    $this->peso = $peso;
  }
  function setIdade($idade) {
    $this->idade = $idade;
  }
  function setMembros($membros){
    $this->membros = $membros;
  }
}
