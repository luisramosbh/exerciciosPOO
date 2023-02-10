<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aula 07 - Torneio UFC</title>
    </head>
    <body>
        <h1>Projeto UFC</h1>
        <pre>
        <?php
            require_once 'lutador.php';
            require_once 'luta.php';
            
            $lutador [0] = new Lutador("Pretty Boy","França", 31, 1.75, 68.9, 11, 3, 1);
            $lutador [1] = new Lutador("Putscript","Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $lutador [2] = new Lutador("Snapshadow","EUA", 35, 1.65, 80.9, 12, 2, 1);
            $lutador [3] = new Lutador("Dead Code","Australia", 28, 1.93, 81.6, 13, 0, 2);
            $lutador [4] = new Lutador("Ufocobol","Brasil", 37, 1.70, 119.3, 5, 4, 3);
            $lutador [5] = new Lutador("Nerdaard","EUA", 30, 1.81, 105.7, 12, 2, 4);

            $luta01 = new Luta();
            $luta01->marcarLuta($lutador[0], $lutador[1]);
            $luta01->lutar();

            $lutador[0]->status();
            $lutador[1]->status();


     
            



        ?>
        </pre>
    </body>
</html>