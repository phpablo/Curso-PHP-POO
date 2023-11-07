<?php
interface Controlador
{
  //Métodos Abstratos: Que não serão implementados aqui, mas de outro arquivo. São Todos Públicos
  public function ligar();
  // $this->setLigado(true);
  public function desligar();
  // $this->setLigado(false);
  public function abrirMenu();
  // echo($this->getLigado());
  // echo($this->getVolume());
  public function fecharMenu();
  // echo "Fechando Menu";
  public function maisVolume();
  public function menosVolume();
  public function ligarMudo();
  public function desligarMudo();
  public function play();
  public function pause();
}
