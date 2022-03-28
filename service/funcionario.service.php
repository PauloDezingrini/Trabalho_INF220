<?php

class FuncionarioService {

    private $conexao;
    private $funcionario;

    public function __construct(PDO $conexao,Funcionario $funcionario) {
        $this->conexao = $conexao; 
        $this->funcionario= $funcionario;    
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