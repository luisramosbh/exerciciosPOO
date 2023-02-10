<?php
require_once 'lutador.php';
    class Luta{
        private $desafiado, $desafiante, $rounds, $aprovada;
        
        public function marcarLuta($lutador1, $lutador2){
            if ($lutador1->getCategoria() === $lutador2->getCategoria() && ($lutador1->getNome() != $lutador2->getNome())){
                $this->aprovada = true;
                $this->desafiado = $lutador1;
                $this->desafiante = $lutador2;
            }else{
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
            }
        }

        public function lutar(){
            if($this->aprovada){
                echo"Desafiado: <br/>";
                $this->desafiado->apresentar();
                echo"Desafiante: <br/>";
                $this->desafiante->apresentar();
                $vencedor = rand(0,2);
                switch ($vencedor) {
                    case 0:
                        echo"<p>Luta deu empate</p>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                    case 1:
                        echo "<p>".$this->desafiado->getNome()." ganhou a luta.</p>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                    case 2:
                        echo "<p>".$this->desafiante->getNome()." ganhou a luta.</p>";
                        $this->desafiante->ganharLuta();
                        $this->desafiado->perderLuta();
                        break;
                 }


            }else{
                echo"A luta não pode acontecer.";
            }
        }

        
        public function getDesafiado() {
            return $this->desafiado;
        }
        public function getDesafiante() {
            return $this->desafiante;
        }
        public function getRounds() {
            return $this->rounds;
        }
        public function getAprovada() {
            return $this->aprovada;
        }

        public function setDesafiado($dd) {
            $this->desafiado = $dd;
        }
        public function setDesafiante($dt) {
            $this->desafiante = $dt;
        }
        public function setRounds($ro) {
            $this->rounds = $ro;
        }
        public function setAprovada($ap) {
           $this->aprovada = $ap;
        }
       
    }



?>