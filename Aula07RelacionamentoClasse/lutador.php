<?php
class Lutador
{
  //Atributos
  private $nome;
  private $nacionalidade;
  private $idade;
  private $altura;
  private $peso;
  private $categoria;
  private $vitorias;
  private $derrotas;
  private $empates;


  //Método Construtor
  function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
  {
    $this->nome = $no;
    $this->nacionalidade = $na;
    $this->idade = $id;
    $this->altura = $al;
    $this->setPeso($pe);
    $this->vitorias = $vi;
    $this->derrotas = $de;
    $this->empates = $em;
  }

  //Métodos
  function apresentar()
  {
    echo "<p>-----------------------------------<p/>";
    echo "<p>CHEGOU A HORA! O lutador<p/>" . $this->getNome();
    echo " Veio diretamente de " . $this->getNacionalidade();
    echo " tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . " kg";
    echo "<br/>Ele tem " . $this->getVitorias() . " vitórias ";
    echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates!";

    // ===========================
    // FIZ ASSIM,MAS TBM FUNCIONOU
    // ===========================
    // echo "Lutador: " . $this->getNome() . "<br/>";
    // echo "Origem: " . $this->getNacionalidade() . "<br/>";
    // echo $this->getIdade() . " anos!<br/>";
    // echo $this->getAltura() . " m de altura!<br/>";
    // echo "Pesando: " . $this->getAltura() . " kg <br/>";
    // echo "Vitorias: " . $this->getVitorias() . "<br/>";
    // echo "Derrotas: " . $this->getDerrotas() . "<br/>";
    // echo "Empates: " . $this->getEmpates() . "<br/>";
  }

  function status()
  {
    echo "<p>===================================<p/>";
    echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
    echo " e já ganhou " . $this->getVitorias() . " vezes";
    echo " perdeu " . $this->getDerrotas() . " vezes e";
    echo " empatou " . $this->getEmpates() . " vezes.";

    // ==EU FIZ ASSIM, MAS TBM FUNCIONOU==
    // echo $this->getNome();
    // // echo " é um peso ".$this->getCategoria(); DANDO ERRO
    // echo $this->getVitorias() . " vitórias";
    // echo $this->getDerrotas() . " derrotas";
    // echo $this->getEmpates() . " empates";
  }

  function ganharLuta()
  {
    $this->setVitorias($this->getVitorias() + 1);
  }

  function perderLuta()
  {
    $this->setDerrotas($this->getDerrotas() + 1);
  }

  function empatarLuta()
  {
    $this->setEmpates($this->getEmpates() + 1);
  }



  //Métodos Getters
  public function getCategoria()
  {
    return $this->categoria;
  }
  function getNome()
  {
    return $this->nome;
  }
  function getNacionalidade()
  {
    return $this->nacionalidade;
  }
  function getIdade()
  {
    return $this->idade;
  }
  function getAltura()
  {
    return $this->altura;
  }
  function getPeso()
  {
    return $this->peso;
  }
  function getVitorias()
  {
    return $this->vitorias;
  }
  function getDerrotas()
  {
    return $this->derrotas;
  }
  function getEmpates()
  {
    return $this->empates;
  }

  //Métodos Setters

  function setNome($no)
  {
    $this->nome = $no;
  }
  function setNacionalidade($na)
  {
    $this->nacionalidade = $na;
  }
  function setIdade($id)
  {
    $this->idade = $id;
  }
  function setAltura($al)
  {
    $this->altura = $al;
  }
  function setPeso($pe)
  {
    $this->peso = $pe;
    // $this->setCategoria($ca);
    $this->setCategoria();
  }
  private function setCategoria()
  {
    if ($this->peso < 52.2) {
      $this->categoria = "Inválido";
    } elseif ($this->peso <= 70.3) {
      $this->categoria = "Leve";
    } elseif ($this->peso <= 83.9) {
      $this->categoria = "Médio";
    } elseif ($this->peso <= 120.2) {
      $this->categoria = "Pesado";
    } else {
      $this->categoria = "Inválido";
    }
    // if($peso < 52.2){
    //   $this->categoria = "Inválido";
    // }elseif($peso <= 70.3){
    //   $this->categoria = "Leve";
    // }elseif($peso <= 83.9){
    //   $this->categoria = "Médio"; 
    // }elseif ($peso <= 120.2) {
    //   $this->categoria = "Pesado";
    // }else {
    //   $this->categoria = "Inválido";
    // }
    // $this->categoria = $pe;
  }
  function setVitorias($vi)
  {
    $this->vitorias = $vi;
  }
  function setDerrotas($de)
  {
    $this->derrotas = $de;
  }
  function setEmpates($em)
  {
    $this->empates = $em;
  }
}
