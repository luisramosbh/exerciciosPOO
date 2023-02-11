<?php
abstract class Animal {

    protected $peso, $idade, $membro;

    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();

    public function getPeso(){
        return $this->peso;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getMembro(){
        return $this->membro;
    }
    public function setPeso($peso){
        $this->peso = $peso;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function setMembro($membro){
        $this->membro = $membro;
    }

}


?>