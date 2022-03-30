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
        $query = 'select Num_Ap, Id_filial, Id_tipo, Ocupado from apartamentos';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function recuperarApartamentoPorTipos(){
        $query = 'select Id_tipo, COUNT(Num_Ap) as quant from apartamentos where Id_filial = :id_filial group by Id_tipo';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id_filial',$this->apartamento->__get('id_filial'));
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    

    public function recuperarPorFilial(){
        $query = 'select Num_Ap, Id_tipo from apartamentos where Id_filial = :id';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id',$this->apartamento->__get('id_filial'));
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function atualizar(){
        $query = 'update apartamentos set Id_tipo = :id_tipo, Ocupado = :ocupado where Id_filial = :id_filial and Num_Ap = :num_ap';
        $stmt  = $this->conexao->prepare($query);
        $stmt->bindValue(':id_tipo',$this->hotel->__get('id_tipo'));
        $stmt->bindValue(':id_filial',$this->hotel->__get('id_filial'));
        $stmt->bindValue(':num_ap',$this->hotel->__get('num_ap'));
        $stmt->bindValue(':ocupado',$this->hotel->__get('ocupado'));
        return $stmt->execute();
    }

    public function remover(){
        $query = 'delete from apartamentos where Id_filial = :id_filial and Num_Ap = :num_ap';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id_filial',$this->hotel->__get('id_filial'));
        $stmt->bindValue(':num_ap',$this->hotel->__get('num_ap'));
        $stmt->execute();
    }
}

?>