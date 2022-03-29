<?php

class TipoService {

    private $conexao;
    private $tipo;

    public function __construct(PDO $conexao,Tipo $tipo) {
        $this->conexao = $conexao; 
        $this->tipo= $tipo;    
    }

    public function inserir() {
        $query = 'insert into tipo(Id_tipo, N_cama_casal, N_cama_solteiro, TV, Frigobar, Adaptado, Diaria)values(:id, :n_cama_casal, :n_cama_solteiro, :tv, :frigobar, :adaptado, :diaria)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id',$this->tipo->__get('id'));
        $stmt->bindValue(':n_cama_casal',$this->tipo->__get('n_cama_casal'));
        $stmt->bindValue(':n_cama_solteiro',$this->tipo->__get('n_cama_solteiro'));
        $stmt->bindValue(':tv',$this->tipo->__get('tv'));
        $stmt->bindValue(':frigobar',$this->tipo->__get('frigobar'));
        $stmt->bindValue(':adaptado',$this->tipo->__get('adaptado'));
        $stmt->bindValue(':diaria',$this->tipo->__get('diaria'));
        $stmt->execute();
    }

    public function recuperar(){
        $query = 'select Id_tipo, N_cama_casal, N_cama_solteiro, TV, Frigobar, Adaptado, Diaria from tipo';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function remover(){
        $query = 'delete from tipo where Id_tipo = :id';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id',$this->hotel->__get('id'));
        $stmt->execute();
    }
}

?>  