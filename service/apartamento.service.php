<?php

class ApartamentoService {

    private $conexao;
    private $apartamento;

    public function __construct(PDO $conexao,Apartamento $apartamento) {
        $this->conexao = $conexao; 
        $this->apartamento= $apartamento;    
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