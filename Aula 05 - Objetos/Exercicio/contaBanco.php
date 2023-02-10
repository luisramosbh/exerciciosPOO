<?php
class ContaBanco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function __construct() {
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p>Conta criada com sucesso!</p>";
        }

        public function abrirConta($t) {
            $this->setTipo($t);
            $this->setStatus(true);
            if ($t == 'CC'){
                $this->setSaldo(50);
            }else if ($t == 'CP'){
                $this->setSaldo(150);
            }

        }

        public function fecharConta() {
            if ($this->getSaldo() > 0) {
                echo "<p>A conta de ".$this->getDono()." ainda possui dinheiro. Você não pode fechá-la. Saldo: R$ ".$this->getSaldo().".</p>";
            }else if ($this->getSaldo() < 0) {
                echo "<p>A conta de ".$this->getDono()." ainda está com saldo negativo. Você não pode fechá-la. Saldo: R$ ".$this->getSaldo().".</p>";
            }else {
                $this->setStatus(false);
                echo "<p>A conta de ".$this->getDono(). " foi fechada com sucesso.</p>";
            }
        }

        public function depositar($vd) {
            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() + $vd);
                echo "<p>Depósito de R$ $vd concluído com sucesso na conta de ".$this->getDono().".</p>";
            }else {
                echo "<p>Impossível depositar. Conta inexistente.</p>";
            }
        }

        public function sacar($vs) {
            if ($this->getStatus()) {
                if ($this->getSaldo() >= $vs){
                    $this->setSaldo($this->getSaldo() - $vs);
                    echo "<p>Saque de R$ $vs autorizado na conta de ".$this->getDono().".</p>";
                }else {
                    echo "<p>Saldo insuficiente para saque.</p>";
                }
            }else {
                echo "<p>Impossível sacar. Conta inexistente.</p>";
            }
        }

        public function pagarMensal() {
            if ($this->getTipo() == 'CC'){
                $mensal = 12;
            }else if ($this->getTipo() == 'CP'){
                $mensal = 20;
            }
            if ($this->getStatus()) {
                if ($this->getSaldo() > $mensal){
                    $this->setSaldo($this->getSaldo() - $mensal);
                    echo "<p>Mensalidade de R$ $mensal debitada na conta de ".$this->getDono().".</p>";
                }else {
                    echo "<p>Saldo insuficiente.</p>";
                }
            }else {
                echo "<p>Impossível pagar a mensalidade. Conta inexistente.</p>";
            }
        }

        public function getNumConta() {
            return $this->numConta;
        }

        public function setNumConta($n) {
            $this->numConta = $n;            
        }

        public function getTipo() {
             return $this->tipo;
        }

        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }

        public function getDono() {
            return $this->dono;
        }

        public function setDono($d) {
            $this->dono = $d;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        public function setSaldo($sd) {
            $this->saldo = $sd;
        }

        public function getStatus() {
            return $this->status;
        }

        public function setStatus($st) {
            $this->status = $st;
        }





}

?>