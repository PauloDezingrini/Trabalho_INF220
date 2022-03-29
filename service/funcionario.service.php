<?php

require "camareira.service.php";

class FuncionarioService {

    private $conexao;
    private $funcionario;

    public function __construct(PDO $conexao,Funcionario $funcionario) {
        $this->conexao = $conexao; 
        $this->funcionario= $funcionario;    
    }

    public function inserir() {
        $query = 'insert into funcionários(Id_func, Cargo, Nome, Trabalh_em)values(:id, :cargo, :nome, :local_trabalho)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id',$this->funcionario->__get('id'));
        $stmt->bindValue(':cargo',$this->funcionario->__get('cargo'));
        $stmt->bindValue(':nome',$this->funcionario->__get('nome'));
        $stmt->bindValue(':local_trabalho',$this->funcionario->__get('local_trabalho'));
        $stmt->execute();

        if(strcmp($this->funcionario->__get('cargo'),"Camareira") == 0){
            $camareiraService = new CamareiraService($this->conexao,$this->funcionario);
            $camareiraService->inserir();
        }
    }

    public function recuperar(){
        $query = 'select Id_func, Nome, Cargo, Trabalh_em from funcionários';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function atualizar(){
        $query = 'update funcionários set Nome = :nome, Cargo = :cargo, Trabalh_em = :local_trabalho where Id_func = :id';
        $stmt  = $this->conexao->prepare($query);
        $stmt->bindValue(':nome',$this->hotel->__get('nome'));
        $stmt->bindValue(':cargo',$this->hotel->__get('cargo'));
        $stmt->bindValue(':local_trabalho',$this->hotel->__get('local_trabalho'));
        $stmt->bindValue(':id',$this->hotel->__get('id'));
        return $stmt->execute();
    }

    public function remover(){
        $query = 'delete from funcionários where Id_func = :id';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id',$this->hotel->__get('id'));
        $stmt->execute();
    }
}

?>