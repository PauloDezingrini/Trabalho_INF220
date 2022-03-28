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

    }

    public function atualizar(){

    }

    public function remover(){

    }
}

?>