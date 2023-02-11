<?php
require_once 'animal.php';
class Mamifero extends Animal{

    private $corPelo;

    public function locomover(){
        echo "<p>Correndo!</P>";
    }
    public function alimentar(){
        echo "<p>Mamando!</P>";
    }
    public function emitirSom(){
        echo "<p>Som de mamífero!</P>";
    }
    public function getCorPelo(){
        return $this->corPlelo;
    }
    public function setCorPelo($corPelo){
        $this->corPelo = $corPelo;
    }
}

?>