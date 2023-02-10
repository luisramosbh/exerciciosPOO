<?php
    class Lutador{
        private $nome, $nacionalidade, $idade, $altura, $peso, $categoria, $vitoria, $derrota, $empate;

        public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
            $this->nome = $no;
            $this->nacionalidade= $na;
            $this->idade = $id;
            $this->altura = $al;
            $this->setPeso($pe);
            $this->vitoria = $vi;
            $this->derrota = $de;
            $this->empate = $em;

        }

        public function apresentar(){
            echo "<p>";
            echo "Lutador: ".$this->getNome()."<br/>";
            echo "País: ".$this->getNacionalidade()."<br/>";
            echo $this->getIdade()." anos<br/>";
            echo $this->getAltura()." M de altura<br/>";
            echo "Peso: ".$this->getPeso()."<br/>";
            echo "Vitórias: ".$this->getVitoria()."<br/>";
            echo "Derrotas: ".$this->getDerrota()."<br/>";
            echo "Empates: ".$this->getEmpate()."<br/>";
            echo "</p>";
        }

        public function status(){
            echo "<p>";
            echo "Lutador: ".$this->getNome()."<br/>";
            echo "País: ".$this->getNacionalidade()."<br/>";
            echo $this->getIdade()." anos<br/>";
            echo $this->getAltura()." M de altura<br/>";
            echo "Peso: ".$this->getPeso()."<br/>";
            echo "Vitórias: ".$this->getVitoria()."<br/>";
            echo "Derrotas: ".$this->getDerrota()."<br/>";
            echo "Empates: ".$this->getEmpate()."<br/>";
            echo "</p>";
        }

        public function ganharLuta(){
            $this->setVitoria($this->getVitoria() + 1);
        }

        public function perderLuta(){
            $this->setDerrota($this->getDerrota() + 1);
        }

        public function empatarLuta(){
            $this->setEmpate($this->getEmpate() + 1);
        }

        public function getNome() {
            return $this->nome;
        }
        public function getNacionalidade() {
            return $this->nacionalidade;
        }
        public function getIdade() {
            return $this->idade;
        }
        public function getAltura() {
            return $this->altura;
        }
        public function getPeso() {
            return $this->peso;
        }
        public function getCategoria() {
            return $this->categoria;
        }
        public function getVitoria() {
            return $this->vitoria;
        }
        public function getDerrota() {
            return $this->derrota;
        }
        public function getEmpate() {
            return $this->empate;
        }

        public function setNome($no) {
            $this->nome = $no;
        }
        public function setNacionalidade($na) {
            $this->nacionalidade = $na;
        }
        public function setIdade($id) {
            $this->idade = $id;
        }
        public function setAltura($al) {
            $this->altura = $al;
        }
        public function setPeso($pe) {
            $this->peso = $pe;
            $this->setCategoria();
        }
        private function setCategoria() {
            if($this->peso < 52.2){
                $this->categoria = 'Inválido';
            }else if($this->peso <= 70.3){
                $this->categoria = 'Leve';
            } else if($this->peso <= 83.9){
                $this->categoria = 'Médio';
            }else if($this->peso <= 120.2){
                $this->categoria = 'Pesado';
            }else{
                $this->categoria = 'Inválido';
            }  
        }
        public function setVitoria($vi) {
            $this->vitoria = $vi;
        }
        public function setDerrota($de) {
            $this->derrota = $de;
        }
        public function setEmpate($em) {
            $this->empate = $em;
        }
    }



?>