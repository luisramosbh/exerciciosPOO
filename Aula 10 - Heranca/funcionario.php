<?php
require_once 'pessoa.php';
class Funcionario extends Pessoa{

private $setor, $trabalhando;

public function mudarTrabalho(){
    $this-> trabalhando = !$this->trabalhando;
}

public function getSetor(){
    return $this->setor;
}
public function getTrabalhando(){
    return $this->trabalhando;
}

public function setSetor($setor){
    $this->setor = $setor;
}
public function setTrabalhando($trabalhando){
     $this->trabalhando = $trabalhando;
}


}

?>