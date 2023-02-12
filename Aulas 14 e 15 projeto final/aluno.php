<?php
require_once 'pessoa.php';
class Aluno extends Pessoa{
    private $login, $totalAssistido;

    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totalAssistido = 0;
    }
    public function viuMaisUm(){
        $this->totalAssistido ++;
    }
    public function getLogin(){
        return $this->login;
    }
    public function getTotalAssistido(){
        return $this->totalAssistido;
    }
    public function setLogin($login){
        $this->login = $login;
    }
    public function setTotalAssistido($totalAssistido){
        $this->totalAssistido = $totalAssistido;
    }
}




?>