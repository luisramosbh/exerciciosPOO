<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aulas 14 e 15 - Projeto Final</title>
    </head>
    <body>
        <h1>Projeto Final - Youtube</h1>
        <pre>
        <?php

            require_once 'video.php';
            require_once 'aluno.php';
            require_once 'visualizacao.php';

            $video [0]= new Video("Aula 1 PHP POO");
            $video [1]= new Video("Aula 2 PHP POO");
            $video [2]= new Video("Aula 3 PHP POO");

            print_r($video);

            $aluno [0]= new Aluno("João", 22, "M", "joaologin");
            $aluno [1]= new Aluno("Maria", 18, "F", "marialogin");


            print_r($aluno);

            $visualizacao [0]= new Visualizacao($aluno[0], $video[0]);
            $visualizacao [1]= new Visualizacao($aluno[1], $video[1]);

            //$visualizacao [0]->avaliar();
            //$visualizacao [0]->avaliarNota(8);
            $visualizacao [0]->avaliarPorcentagem(40);

            print_r($visualizacao);
            
            




        ?>
        </pre>
    </body>
</html>