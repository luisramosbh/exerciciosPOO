<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aula 11 - Árvores de Herança</title>
    </head>
    <body>
        <h1>Árvores de Herança</h1>
        <pre>
        <?php
            require_once 'aluno.php';
            require_once 'professor.php';
            require_once 'visitante.php';
            require_once 'bolsista.php';
            require_once 'tecnico.php';

            
            $aluno = new Aluno();
            $aluno->setNome('Maria');
            $aluno->setMatricula(2337);
            $aluno->setIdade(16);
            $aluno->setSexo('F');
            $aluno->setCurso('Informática');
            $aluno->pagarMensalidade();
            print_r($aluno);

            $bolsista = new Bolsista();
            $bolsista->setMatricula(4432);
            $bolsista->setNome('João');
            $bolsista->setBolsa(12.5);
            $bolsista->setCurso('Administração');  
            $bolsista->setIdade(17);
            $bolsista->pagarMensalidade();    
            print_r($bolsista);     
        ?>
        </pre>
    </body>
</html>