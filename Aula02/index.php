<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 02 - POO</title>
</head>
<body>
    <?php
        // Classe seja carregada no index
         require_once 'Caneta.php';

        // instanciar a classe 
        $c1 = new Caneta;

        // acessando atributos do obj 
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampar();
        print_r($c1);
        echo "<br/>";
        echo "<hr/>";

        $c2 = new Caneta;
        $c2->cor = "Verde";
        $c2->ponta = 1;
        $c2->carga = 50;
        $c2->tampar();
        print_r($c2);
        echo "<br/>";
        echo "<hr/>";


    ?>
</body>
</html>