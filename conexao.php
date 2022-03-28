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

    $conectar = new Conexao();
    $conexao = $conectar->conectar();
    // $query = 'select * from hoteis';
    // $retorn = $conexao->query($query); 
    // $lista = $retorn->fetchAll();
    // echo '<pre>';
    // print_r($lista);
    // echo '</pre>';
?>