<?php
class Cadeira
{
  var $acento;
  var $girar;
  var $cor;

  function sentar()
  {
    if ($this->acento == true) {
      echo "[[ERROR]] Não posso sentar...cadeira ocupada...";
    } else {
      echo "<h3> Estou sentando...</h3>";
    }
  }

  function girarDireita()
  {
    if ($this->girar == true) {
      echo "[[ERROR]] Não posso girar direita...cadeira já está girando";
    } else {
      echo "<h3> Estou girando direita...</h3>";
    }
  }
}
