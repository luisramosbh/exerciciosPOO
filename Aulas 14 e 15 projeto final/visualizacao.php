<?php
require_once 'video.php';
require_once 'aluno.php';

class Visualizacao{
    private $espectador, $filme;

    public function __construct($espectador, $filme){
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotalAssistido($this->espectador->getTotalAssistido() + 1);
    }

    public function avaliar(){
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($nota){
        $this->filme->setAvaliacao($nota);
    }
    public function avaliarPorcentagem($porcentagem){
        $novaNota = 0;
        if($porcentagem <=20){
            $novaNota = 3;
        }else if($porcentagem <=50){
            $novaNota = 5;
        }else if($porcentagem <= 90){
            $novaNota = 8;
        }else{
            $novaNota = 10;
        }
        $this->filme->setAvaliacao($novaNota);
    }
    public function getEspectador(){
        return $this->espectador;
    }
    public function getFilme(){
        return $this->filme;
    }
    public function setEspectador($espectador){
        $this->espectador = $espectador;
    }
    public function setFilme($filme){
        $this->filme = $filme;
    }

}

?>