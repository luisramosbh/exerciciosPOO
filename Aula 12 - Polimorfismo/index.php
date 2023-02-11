<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aula 12 - Polimorfismo</title>
    </head>
    <body>
        <h1>Polimorfismo</h1>
        <pre>
        <?php
            require_once 'animal.php';
            require_once 'ave.php';
            require_once 'mamifero.php';
            require_once 'peixe.php';
            require_once 'reptil.php';
            require_once 'cachorro.php';
            require_once 'canguru.php';
            require_once 'cobra.php';
            require_once 'tartaruga.php';
            require_once 'peixedourado.php';
            require_once 'arara.php';

            $ave = new Ave();
            $ave->setPeso(0.89);
            $ave->setIdade(2);
            $ave->setMembro(2);
            $ave->setCorPena('Cinza e Laranja');
            $ave->locomover();
            $ave->alimentar();
            $ave->emitirSom();
            $ave->fazerNinho();

            print_r($ave);

            $mamifero = new Mamifero();
            $mamifero->setPeso(23.4);
            $mamifero->setIdade(5);
            $mamifero->setMembro(4);
            $mamifero->setCorPelo('Bege');
            $mamifero->locomover();
            $mamifero->alimentar();
            $mamifero->emitirSom();

            print_r($mamifero);

            $canguru = new Canguru();
            $canguru->setPeso(18.9);
            $canguru->setIdade(7);
            $canguru->setMembro(4);
            $canguru->setCorPelo('Marrom');
            $canguru->locomover();
            $canguru->alimentar();
            $canguru->emitirSom();
            $canguru->usarBolsa();
            print_r($canguru);

            $cachorro = new Cachorro();
            $cachorro->setPeso(27.6);
            $cachorro->setIdade(6);
            $cachorro->setMembro(4);
            $cachorro->setCorPelo('Preto e Branco');
            $cachorro->locomover();
            $cachorro->alimentar();
            $cachorro->emitirSom();
            $cachorro->enterrarOsso();
            $cachorro->abanarRabo();

            print_r($cachorro);

            $peixe = new Peixe();
            $peixe->setPeso(0.35);
            $peixe->setIdade(1);
            $peixe->setMembro(0);
            $peixe->setCorEscama('Laranja');
            $peixe->locomover();
            $peixe->alimentar();
            $peixe->emitirSom();
            $peixe->soltarBolha();

            print_r($peixe);

            $reptil = new Reptil();
            $reptil->setPeso(0.35);
            $reptil->setIdade(1);
            $reptil->setMembro(0);
            $reptil->setCorEscama('Verde');
            $reptil->locomover();
            $reptil->alimentar();
            $reptil->emitirSom();

            print_r($reptil);

            $tartaruga = new Reptil();
            $tartaruga->setPeso(2);
            $tartaruga->setIdade(30);
            $tartaruga->setMembro(4);
            $tartaruga->setCorEscama('Verde escuro');
            $tartaruga->locomover();
            $tartaruga->alimentar();
            $tartaruga->emitirSom();

            print_r($tartaruga);


     
        ?>
        </pre>
    </body>
</html>