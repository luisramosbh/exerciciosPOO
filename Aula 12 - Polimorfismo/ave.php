<?php
require_once 'animal.php';
class Ave extends Animal{

    private $corPena;

    public function locomover(){
        echo "<p>Voando!</P>";
    }
    public function alimentar(){
        echo "<p>Comendo frutas!</P>";
    }
    public function emitirSom(){
        echo "<p>Som de ave!</P>";
    }
    public function fazerNinho(){
        echo "<p>Construiu um ninho!</P>";
    }
    public function getCorPena(){
        return $this->corPena;
    }
    public function setCorPena($corPena){
        $this->corPena = $corPena;
    }
    
}

?>