<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aula 05 - ContaBanco</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'contaBanco.php';
            $pessoa1 = new ContaBanco();
            $pessoa2 = new ContaBanco();
            $pessoa1->abrirConta("CC");
            $pessoa1->setNumConta(0001);
            $pessoa1->setDono("João");
            $pessoa2->abrirConta("CP");
            $pessoa2->setNumConta(0002);
            $pessoa2->setDono("Maria");

            $pessoa1->depositar(300);
            $pessoa2->depositar(500);

            $pessoa2->sacar(100);
            $pessoa2->sacar(1000);


            $pessoa1->pagarMensal();
            $pessoa2->pagarMensal();

            $pessoa2->sacar(530);

            $pessoa2->fecharConta();
            $pessoa1->fecharConta();

            print_r($pessoa1);
            print_r($pessoa2);



        ?>
        </pre>
    </body>
</html>