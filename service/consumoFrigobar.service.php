<?php

class ConsumoFrigobarService {

    private $conexao;
    private $consumoFrigobar;

    public function __construct(PDO $conexao,ConsumoFrigobar $consumoFrigobar) {
        $this->conexao = $conexao; 
        $this->consumoFrigobar= $consumoFrigobar;    
    }

    public function inserir() {
        $query = 'insert into consumo_frigobar(Produto, Quantidade, Data_consumo, Valor_unitário, Id_consumo, Anotado_por, Conta)values(:produto, :quantidade, :data_consumo, :valor_unit, :id, :registrado, :conta)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':produto',$this->consumoFrigobar->__get('produto'));
        $stmt->bindValue(':quantidade',$this->consumoFrigobar->__get('quantidade'));
        $stmt->bindValue(':data_consumo',$this->consumoFrigobar->__get('data_consumo'));
        $stmt->bindValue(':valor_unit',$this->consumoFrigobar->__get('valor_unit'));
        $stmt->bindValue(':id',$this->consumoFrigobar->__get('id'));
        $stmt->bindValue(':registrado',$this->consumoFrigobar->__get('registrado'));
        $stmt->bindValue(':conta',$this->consumoFrigobar->__get('conta'));
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