<?php

class ClienteService {

    private $conexao;
    private $cliente;

    public function __construct(PDO $conexao,Cliente $cliente) {
        $this->conexao = $conexao; 
        $this->cliente= $cliente;    
    }

    public function inserir() {

    }

    public function recuperar(){

    }

    public function atualizar(){

    }

    public function remover(){

    }
}

?>