<?php
class Pessoa{

private $nome, $sexo, $idade;

public function fazerAniversario(){
    $this->idade ++;

}

public function getNome(){
    return $this->nome;
}
public function getSexo(){
    return $this->sexo;
}
public function getIdade(){
    return $this->idade;
}
public function setNome($nome){
    $this->nome = $nome;
}
public function setSexo($sexo){
     $this->sexo = $sexo;
}
public function setIdade($idade){
    $this->idade = $idade;
}




}

?>