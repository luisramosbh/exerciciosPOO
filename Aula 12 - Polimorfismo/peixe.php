<?php
require_once 'animal.php';
class Peixe extends Animal{

    private $corEscama;

    public function locomover(){
        echo "<p>Nadando!</P>";
    }
    public function alimentar(){
        echo "<p>Comendo substâncias do mar!</P>";
    }
    public function emitirSom(){
        echo "<p>Peixe não faz som!</P>";
    }
    public function soltarBolha(){
        echo "<p>Bloob... Soltou uma bolha</P>";
    }
    public function getCorEscama(){
        return $this->corEscama;
    }
    public function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }
    
}

?>