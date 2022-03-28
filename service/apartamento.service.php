<?php

class ApartamentoService {

    private $conexao;
    private $apartamento;

    public function __construct(PDO $conexao,Apartamento $apartamento) {
        $this->conexao = $conexao; 
        $this->apartamento= $apartamento;    
    }

    public function inserir() {
        $query = 'insert into apartamentos(Num_Ap, Id_filial, Id_tipo)values(:num_ap, :id_filial, :id_tipo)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':num_ap',$this->apartamento->__get('num_ap'));
        $stmt->bindValue(':id_filial',$this->apartamento->__get('id_filial'));
        $stmt->bindValue(':id_tipo',$this->apartamento->__get('id_tipo'));
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