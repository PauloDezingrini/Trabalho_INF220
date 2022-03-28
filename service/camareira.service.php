<?php


class CamareiraService {

    private $conexao;
    private $camareira;

    public function __construct(PDO $conexao,Camareira $camareira) {
        $this->conexao = $conexao; 
        $this->camareira= $camareira;    
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