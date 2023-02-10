<?php
require_once 'aluno.php';
class Bolsista extends Aluno{

private $bolsa;

public function renovarBolsa(){
    echo "<p>Bolsa renovada</p>";

}

public function pagarMensalidade(){
    echo "<p>".$this->nome. " é bolsista, portanto possui dsconto.</p>";

}

public function getBolsa(){
    return $this->bolsa;
}
public function setBolsa($bolsa){
    $this->bolsa = $bolsa;
}



}

?>