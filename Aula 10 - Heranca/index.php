<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aula 10 -Herança</title>
    </head>
    <body>
        <h1>Herança</h1>
        <pre>
        <?php
            require_once 'pessoa.php';
            require_once 'aluno.php';
            require_once 'professor.php';
            require_once 'funcionario.php';
            
            $pessoa = new Pessoa();
            $aluno = new Aluno();
            $professor = new Professor();
            $funcionario = new funcionario();

            $pessoa->setNome('Pedro');
            $aluno->setNome('Maria');
            $aluno->setIdade(20);
            $professor->setNome('Cláudio');
            $funcionario->setNome('Fabiana');
            $funcionario->setTrabalhando(true);

            $aluno->setCurso('Informática');
            $professor->setSalario('800');
            $funcionario->setSetor('Estoque');

            print_r($pessoa);
            print_r($aluno);
            print_r($funcionario);
            print_r($professor);

            $aluno->fazerAniversario();
            $aluno->cancelarMatricula();
            $professor->receberAumento(500);
            $funcionario->mudarTrabalho();

            print_r($pessoa);
            print_r($aluno);
            print_r($funcionario);
            print_r($professor);

        ?>
        </pre>
    </body>
</html>