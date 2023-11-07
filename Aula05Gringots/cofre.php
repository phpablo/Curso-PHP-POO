<?php
class ContaBanco
{

  //Atributos da Classe ContaBanco
  public $numConta;
  protected $tipo;
  private $dono;
  private $saldo;
  private $status;

  //Metodo Construct
  public function __construct()
  {
    // $this->saldo = 0;
    // $this->status = false;
    $this->setSaldo(0);
    $this->setStatus(false);
    echo "<p>Conta criada com sucesso!<p/>";
  }

  //Métodos da classe ContaBanco
  //$t se refere ao tipo da conta: CC ou CP 
  public function abrirConta($t)
  {
    // $this->status = true; Fiz errado essa
    // $this->tipo = $tipoConta; Errado again
    $this->setTipo($t);
    $this->setStatus(true);
    if ($t == "CC") {
      $this->setSaldo(50);
    } elseif ($t == "CP") {
      //Funciona, mas ñ é recomendado, prefira setSaldo(150)
      $this->saldo = 150;
    }
  }
  public function fecharConta()
  {
    if ($this->getSaldo() > 0) {
      echo "<p>Conta com dinheiro, não posso fecha-la!</p>";
    } elseif ($this->getSaldo() < 0) {
      echo "<p>Conta está com débito,impossível encerra-la</p>";
    } else {
      $this->setStatus(false);
      echo "<p>Conta de ".$this->getDono()." encerrada com sucesso!</p>";
    }
  }

  public function depositar($v)
  {
    if ($this->getStatus()) {
      $this->setSaldo($this->getSaldo() + $v);
      echo "<p>Deposito de ".number_format($v,2,',','.')." realizado com sucesso na conta de ".$this->getDono()."</p><hr>";
      // $this->saldo = $this->saldo + $v;
    } else {
      echo "<p>Conta fechada,não consigo depositar!</p>";
    }
  }

  public function sacar($v)
  {
    if ($this->getStatus()) {
      if ($this->getSaldo() >= $v) {
        $this->setSaldo($this->getSaldo() - $v);
        echo "Saque de R$".number_format($v,2,',','.')." reais altorizado na conta <hr/>".$this->getDono(); 
        // $this->saldo = $this->saldo - $v;
      } else {
        echo "<p>saldo insuficiente para saque</p>";
      }
    } else {
      echo "<p>Não posso sacar.Conta fechada</p>";
    }
  }

  public function pagarMensal()
  {
    if ($this->getTipo() == "CC") {
      $v = 12;
    } else if ($this->getTipo() == "CP") {
      $v = 20;
    }if ($this->getStatus()) {
      $this->setSaldo($this->getSaldo() - $v);
      echo "<p>Pagamento mensal de R$ $v realizado com sucesso na conta de ".$this->getDono()."</p><hr>";
    } else {
      echo "Problemas com a conta.Não posso cobrar!!!!";
    }
  }


  //Metodos especiais: getters and setters
  function getnumConta()
  {
    return $this->numConta;
  }
  function setnumConta($n)
  {
    $this->numConta = $n;
  }

  function getTipo()
  {
    return $this->tipo;
  }

  function setTipo($tipo)
  {
    $this->tipo = $tipo;
  }

  function getDono()
  {
    return $this->dono;
  }

  function setDono($dono)
  {
    $this->dono = $dono;
  }

  function getSaldo()
  {
    return $this->saldo;
  }

  function setSaldo($s)
  {
    $this->saldo = $s;
  }

  function getStatus()
  {
    return $this->status;
  }

  function setStatus($status)
  {
     $this->status = $status;
  }
}
?>