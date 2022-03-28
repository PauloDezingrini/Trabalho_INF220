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

    }

    public function remover(){

    }
}

?>