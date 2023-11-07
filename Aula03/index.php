<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 02 - POO</title>
</head>

<body>

    <pre>
        <?php
        // Classe seja carregada no index
        require_once 'Caneta.php';

        // instanciar a classe 
        $c1 = new Caneta;
        $c1->modelo = "Bic Cristal";
        // $c1->ponta = 0.5; é private
        // $c1->tampada = true; é private
        print_r($c1);
        $c1->rabiscar();
        $c1->destampar();
        ?>
    </pre>
</body>

</html>