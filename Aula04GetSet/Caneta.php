<?php

class Caneta
{
  private $modelo;
  private $cor;
  private $ponta;
  private $tampada;

  function __construct($modelo, $cor, $ponta,$tampada){
    $this->modelo = $modelo;
    $this->cor = $cor;
    $this->ponta = $ponta;
    $this->tampada = true;
  }
  //create getter and setter methods
  function getModelo(){
    return $this->modelo;
  }
  function setModelo($modelo){
    $this->modelo = $modelo;
  }
  function getCor(){
    return $this->cor;
  }
  function setCor($cor){
    $this->cor = $cor;
  }
  function getPonta(){
    return $this->ponta;
  }
  function setPonta($ponta){
    $this->ponta = $ponta;
  }
  function getTampada(){
    return $this->tampada;
  }
  function setTampada($tampada){
    $this->tampada = $tampada;
  }
}
