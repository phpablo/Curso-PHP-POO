<?php
require_once 'Ave.php';

class Arara extends Ave{
  
  public function alimentar()
  {
    echo '<p>Comendo frutas<p/>';
  }
  public function emitirSom()
  {
    echo '<p>Som de Ave</p>';
  }
  public function locomover()
  {
    echo '<p>Voando</p>';
  }
  public function fazerNinho(){
    echo '<p>Construindo Ninho</p>';
  }
}
?>