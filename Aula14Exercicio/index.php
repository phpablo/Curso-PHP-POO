<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício POO</title>
</head>

<body>
  <pre>
    <?php
    require_once 'video.php';
    require_once 'Gafanhoto.php';
    require_once 'Visualizacao.php';
    $v[0] = new Video('Aula 01 de POO');
    $v[1] = new Video('Aula 12 de PHP');
    $v[2] = new Video('Aula 15 de HTML5');

    $g[0] = new Gafanhoto('Goku', 19, 'M', 'fanho');
    $g[1] = new Gafanhoto('Bulma', 12, 'F', 'gg');



    $vis[0] = new Visualizacao($g[0], $v[2]); //Goku assiste html5
    $vis[1] = new Visualizacao($g[0], $v[1]); //Goku assiste POO

    $vis[0]->avaliar();
    $vis[1]->avaliarPorc(85);
    print_r($vis);
    ?>
  </pre>
</body>

</html>