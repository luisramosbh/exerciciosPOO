<?php
require_once 'pessoa.php';
class Aluno extends Pessoa{

private $matricula, $curso;

public function pagarMensalidade(){
    echo "<p>Mensalidade paga do aluno: ".$this->nome. "</p>";

}

public function getMatricula(){
    return $this->matricula;
}
public function getCurso(){
    return $this->curso;
}

public function setMatricula($matricula){
    $this->matricula = $matricula;
}
public function setCurso($curso){
     $this->curso = $curso;
}


}

?>