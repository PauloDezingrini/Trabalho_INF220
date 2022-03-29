<?php


class CamareiraService {

    private $conexao;
    private $camareira;

    public function __construct(PDO $conexao,Funcionario $camareira) {
        $this->conexao = $conexao; 
        $this->camareira= $camareira;    
    }

    public function inserir() {
        $query = 'insert into camareira(Id_func, Nome)values(:id, :Nome)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id',$this->camareira->__get('id'));
        $stmt->bindValue('nome',$this->camareira->__get('nome'));
        $stmt->execute();
    }

    public function recuperar(){
        $query = 'select Id_func, Nome from camareira';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function atualizar(){
        $query = 'update camareira set Nome = :nome where Id_func = :id';
        $stmt  = $this->conexao->prepare($query);
        $stmt->bindValue(':nome',$this->hotel->__get('nome'));
        $stmt->bindValue(':id',$this->hotel->__get('id'));
        return $stmt->execute();
    }

    public function remover(){
        $query = 'delete from camareira where Id_func = :id';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id',$this->hotel->__get('id'));
        $stmt->execute();
    }
}

?>