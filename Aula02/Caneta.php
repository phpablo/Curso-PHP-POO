<?php
// Criando uma classe ( 1º letra maiúscula)
class Caneta
{

    // Variaveis criadas dentro da classe que serão atributos do objeto
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;


    // funções da Classe(nome em minusculo)

    function rabiscar()
    {
       if($this->tampada == true) {
        echo "[[ERROR]] Não posso rabiscar...";
       }else {
        echo "<h3> Estou rabiscando...</h3>";
       }
    }

    function tampar()
    {
        $this->tampada = true;
    }

    function destampar()
    {
        $this->tampada = false;
    }
}
