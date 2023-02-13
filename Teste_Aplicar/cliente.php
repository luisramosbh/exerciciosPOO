<?php

    class Cliente {

    public $id, $nome, $cnpj, $endereco, $telefone, $gasto;

    public function gravarDados() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "testeaplicar";

        $nome = $_POST["nome"];
        $cnpj = $_POST["cnpj"];
        $endereco = $_POST["endereco"];
        $telefone = $_POST["telefone"];
        $gasto = rand(1,200000);

        try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO testeaplicar.cliente (nome, cnpj, endereco, telefone, gasto)
                VALUES ('$nome', $cnpj, '$endereco', $telefone, $gasto)";
        
        $conn->exec($sql);
        
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }

        $conn = null;
        return $conn;

    }

    public function buscarDados(){

        // todo: juntar a conexão em uma só função para não precisar repetir a conexão em toda função.
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "testeaplicar";

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $consulta = $conn->query("SELECT nome, gasto FROM testeaplicar.cliente;");


        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            echo "Nome: {$linha['nome']} - Gastos: {$linha['gasto']}<br />";

        }
        
    }

    public function calcularMedia(){
        
        }


    
    /*public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getCnpj(){
        return $this->cnpj;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getGasto(){
        return $this->gasto;
    }
    public function setId($id){
        $this->nome = $id;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function setGasto($gasto){
        $this->gasto = $gasto;
    }*/
        
    }

?>