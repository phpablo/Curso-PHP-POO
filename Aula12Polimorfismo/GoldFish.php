<?php
require_once 'Peixe.php';

class GoldFish extends Peixe {

  public function alimentar()
  {
    echo '<p>Comendo substância<p/>';
  }
  public function emitirSom()
  {
      echo '<p>Peixe não faz som<p/>';
  }
  public function locomover()
  {
    echo '<p>Nadando</p>';
  }
  function soltarBolha(){
    echo '<p>Soltou uma Bolha</p>';
  }
}

?>