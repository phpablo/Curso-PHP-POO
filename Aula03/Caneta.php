<?php
// Criando uma classe ( 1º letra maiúscula)
class Caneta
{

    // Variaveis criadas dentro da classe que serão atributos do objeto
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;


    // funções da Classe(nome em minusculo)

     public function rabiscar()
    {
       if($this->tampada == true) {
        echo "[[ERROR]] Não posso rabiscar...";
       }else {
        echo "<h3> Estou rabiscando...</h3>";
       }
    }

    private function tampar()
    {
        $this->tampada = true;
    }

    private function destampar()
    {
        $this->tampada = true;
    }
}
