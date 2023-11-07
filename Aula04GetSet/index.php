<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 4 - Get e Set</title>
</head>
<body>
  <pre>
    <?php 
      require_once 'Caneta.php';
  
      $c1 = new Caneta("Rick","Green",0.1,true);
      $c2 = new Caneta("Rick","Red",0.1,false);
      
      print_r($c1);
      var_dump($c2);
    
    ?>
  </pre>
</body>
</html>