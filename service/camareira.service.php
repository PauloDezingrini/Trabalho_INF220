<?php


class CamareiraService {

    private $conexao;
    private $camareira;

    public function __construct(PDO $conexao,Funcionario $camareira) {
        $this->conexao = $conexao; 
        $this->camareira= $camareira;    
    }

    public function inserir() {
        $query = 'insert into camareira(Id_func, Nome)values(:id_func, :Nome)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id_func',$this->camareira->__get('id_func'));
        $stmt->bindValue('nome',$this->camareira->__get('nome'));
        $stmt->execute();
    }

    public function recuperar(){

    }

    public function atualizar(){

    }

    public function remover(){

    }
}

?>