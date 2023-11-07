<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  // Classe seja carregada no index
  require_once 'Cadeira.php';

  $cad1 = new Cadeira;

  $cad1->acento = true;
  $cad1->girar = false;
  $cad1->cor = "Azul";
  $cad1->sentar();
  echo "<br/>";
  echo "<hr/>";
  $cad1->girarDireita();
  echo "<hr/>";

  $ca2 = new Cadeira;
  $ca2->acento = false;
  $ca2->girar = true;
  $ca2->cor = "Verde";
  $ca2->sentar();
  echo "<br/>";
  echo "<hr/>";


  print_r($cad1);
  echo "<br/>";
  print_r($ca2);





  ?>
</body>

</html>