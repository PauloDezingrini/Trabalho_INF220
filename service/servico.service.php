<?php


class ServicoService{

    private $conexao;
    private $servico;

    public function __construct(PDO $conexao,Servico $servico) {
        $this->conexao = $conexao; 
        $this->servico= $servico;    
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