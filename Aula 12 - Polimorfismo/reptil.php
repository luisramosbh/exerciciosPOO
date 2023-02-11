<?php
require_once 'animal.php';
class Reptil extends Animal{

    private $corEscama;

    public function locomover(){
        echo "<p>Arrastando!</P>";
    }
    public function alimentar(){
        echo "<p>Comendo Vegetais!</P>";
    }
    public function emitirSom(){
        echo "<p>Som de réptil!</P>";
    }
    public function getCorEscama(){
        return $this->corEscama;
    }
    public function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }
}

?>