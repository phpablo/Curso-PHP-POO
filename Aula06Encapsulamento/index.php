<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Controle Remoto</title>
</head>

<body>
    <h1>Testando Controle Remoto</h1>
    <pre>
      
      <?php
      REQUIRE_ONCE 'ControleRemoto.php';
  
      $c1 = new ControleRemoto();
  
      $c1->ligar();
      $c1->maisVolume();
      $c1->abrirMenu();
      
  
  
  
      ?>
  
    </pre>
</body>

</html>