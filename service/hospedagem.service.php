<?php

class HospedagemService {

    private $conexao;
    private $hospedagem;

    public function __construct(PDO $conexao,hospedagem $hospedagem) {
        $this->conexao = $conexao; 
        $this->hospedagem= $hospedagem;    
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