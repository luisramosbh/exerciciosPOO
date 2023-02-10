<?php
require_once 'pessoa.php';
require_once 'publicacao.php';
    class Livro  implements Publicacao{
        private $titulo, $autor, $totPaginas, $pagAtual, $aberto, $leitor;
        
        public function __construct($titulo, $autor, $totPaginas, $leitor){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->aberto = false;
            $this->pagAtual = 0;
            $this->leitor = $leitor;

        }
        
        public function detalhes(){
            echo "Livro ".$this->titulo." escrito por ".$this->autor;
            echo "</br> Páginas: ".$this->totPaginas.". Atualmente na página ".$this->pagAtual;
            echo "</br> Sendo lido por ".$this->leitor->getNome();
        }

        
        public function getTitulo() {
            return $this->titulo;
        }
        public function getAutor() {
            return $this->autor;
        }
        public function getTotPaginas() {
            return $this->totPaginas;
        }
        public function getPagAtual() {
            return $this->pagAtual;
        }
        public function getAberto() {
            return $this->aberto;
        }
        public function getLeitor() {
            return $this->leitor;
        }

        public function setTitulo($titulo) {
           $this->titulo = $titulo;
        }
        public function setAutor($autor) {
            $this->autor = $autor;
        }
        public function setTotPaginas($totPaginas) {
            $this->totPaginas = $totPaginas;
        }
        public function setPagAtual($pagAtual) {
            $this->pagAtual = $pagAtual;
        }
        public function setAberto($aberto) {
            $this->aberto = $aberto;
        }
        public function setLeitor($leitor) {
            $this->leitor = $leitor;
        }
       
        public function abrir(){
            $this->aberto = true;
        }
        public function fechar(){
            $this->aberto = false;
        }
        public function folhear($pagina){
            if($pagina > $this->totPaginas){
                $this->pagAtual = 0;
            }else{
                $this->pagAtual = $pagina;
            }
        }
        public function avancarPag(){
            $this->pagAtual ++;
        }
        public function voltarPag(){
            $this->pagAtual --;
        }


    }



?>