<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aula 07 - Torneio UFC</title>
    </head>
    <body>
        <h1>Livros e Leitores</h1>
        <pre>
        <?php
            require_once 'pessoa.php';
            require_once 'livro.php';
            
            $pessoa[0] = new Pessoa("João", 22, "M");
            $pessoa[1] = new Pessoa("Maria", 31, "F");

            $livro[0] = new Livro("PHP POO", "José da Silva", 300, $pessoa[0]);
            $livro[1] = new Livro("MySQL", "G. Guanabara", 180, $pessoa[0]);
            $livro[2] = new Livro("Algoritmos", "A. Caldeira", 230, $pessoa[1]);
            $livro[3] = new Livro("Java", "C. Barroca", 290, $pessoa[1]);

            $livro[0]->abrir();
            $livro[0]->folhear(80);
            $livro[0]->avancarPag();
            $livro[0]->detalhes();
        ?>
        </pre>
    </body>
</html>