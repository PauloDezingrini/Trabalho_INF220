<?php

class TipoService {

    private $conexao;
    private $tipo;

    public function __construct(PDO $conexao,Tipo $tipo) {
        $this->conexao = $conexao; 
        $this->tipo= $tipo;    
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