<?php

    class Conexao {
        private $host = 'localhost';
        private $dbname = 'hoteis_bom_sono';
        private $user = 'root';
        private $pass = '';

        public function conectar(){
            try {
                $conexao = new PDO(
                    "mysql:host=$this->host;dbname=$this->dbname",
                    "$this->user",
                    "$this->pass"
                );
                
                return $conexao;
            } catch (PDOException $e) {
                echo '<p>'.$e->getMessage().'</p>';
            }
        }
    }

    if(!isset($conexao)){
        $conectar = new Conexao();
        $conexao = $conectar->conectar();
    }

?>