<?php


class HotelService {

    private $conexao;
    private $hotel;

    public function __construct(PDO $conexao,Hotel $hotel) {
        $this->conexao = $conexao; 
        $this->hotel= $hotel;    
    }

    public function inserir() {
        $query = 'insert into hoteis(Cidade, Estado)values(:cidade, :estado)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':cidade',$this->hotel->__get('cidade'));
        $stmt->bindValue(':estado',$this->hotel->__get('estado'));
        $stmt->execute();
    }

    public function recuperar(){
        $query = 'select Id_filial, Cidade, Estado from hoteis';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }   

    public function atualizar(){
        $query = 'update hoteis set Cidade = :cidade, Estado = :estado where Id_filial = :id';
        $stmt  = $this->conexao->prepare($query);
        $stmt->bindValue(':cidade',$this->hotel->__get('cidade'));
        $stmt->bindValue(':estado',$this->hotel->__get('estado'));
        $stmt->bindValue(':id',$this->hotel->__get('id'));
        return $stmt->execute();
    }

    public function remover(){
        $query = 'delete from hoteis where Id_filial = :id';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id',$this->hotel->__get('id'));
        $stmt->execute();
    }
}

?>