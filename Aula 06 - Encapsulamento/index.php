<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aula 06 - Encapsulamento</title>
    </head>
    <body>
        <h1>Projeto Controle Remoto</h1>
        <pre>
        <?php
            require_once 'controleRemoto.php';
            $cr = new ControleRemoto();
            $cr->ligar();
            $cr->maisVolume();
            $cr->abrirMenu();



        ?>
        </pre>
    </body>
</html>