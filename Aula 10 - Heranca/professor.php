<?php
require_once 'pessoa.php';
class Professor extends Pessoa{

private $materia, $salario;

public function receberAumento($aumento){
    $this->salario += $aumento;

}

public function getMateria(){
    return $this->materia;
}
public function getSalario(){
    return $this->salario;
}

public function setMateria($materia){
    $this->materia = $materia;
}
public function setSalario($salario){
     $this->salario = $salario;
}


}

?>