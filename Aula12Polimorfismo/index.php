<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 12 Polimorfismo</title>
</head>

<body>
<pre>
  <?php
    require_once 'Mamifero.php';
    require_once 'Reptil.php';
    require_once 'Peixe.php';
    require_once 'Ave.php';
  
  
  
    $m = new Mamifero();
    $a = new Ave();
    $r = new Reptil();
    $p = new Peixe();
  
    $m->setPeso(33);
    $m->locomover();
    $a->locomover();
    $r->locomover();
    $p->locomover();
  
  
  ?>
</pre>
</body>

</html>