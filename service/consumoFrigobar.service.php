<?php

class ConsumoFrigobarService {

    private $conexao;
    private $consumoFrigobar;

    public function __construct(PDO $conexao,ConsumoFrigobar $consumoFrigobar) {
        $this->conexao = $conexao; 
        $this->consumoFrigobar= $consumoFrigobar;    
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