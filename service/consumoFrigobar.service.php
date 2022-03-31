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
        $query = 'select Id_consumo, Anotado_por, Conta, Data_consumo, Produto, Valor_unitário, Quantidade   from consumo_frigobar';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function recuperarPorConta(){
        $query = 'select Id_consumo, Anotado_por, Conta, Data_consumo, Produto, Valor_unitário, Quantidade   from consumo_frigobar where Conta = :conta';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':conta',$this->consumoFrigobar->__get('conta'));
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function recuperarPorProduto(){
        $query = 'select Id_consumo, Anotado_por, Conta, Data_consumo, Produto, Valor_unitário, Quantidade   from consumo_frigobar where Produto = :produto';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':produto',$this->consumoFrigobar->__get('produto'));
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function atualizar(){
        $query = 'update consumo_frigobar set Anotado_por = :registrado, Conta = :conta, Produto = :produto, Quantidade = :quantidade, Valor_unitário = :valor_unit where Id_consumo = :id';
        $stmt  = $this->conexao->prepare($query);
        $stmt->bindValue(':registrado',$this->hotel->__get('registrado'));
        $stmt->bindValue(':conta',$this->hotel->__get('conta'));
        $stmt->bindValue(':produto',$this->hotel->__get('produto'));
        $stmt->bindValue(':quantidade',$this->hotel->__get('quantidade'));
        $stmt->bindValue(':valor_unit',$this->hotel->__get('valor_unit'));
        $stmt->bindValue(':id',$this->hotel->__get('id'));
        return $stmt->execute();
    }

    public function remover(){
        $query = 'delete from consumo_frigobar where Id_consumo = :id';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id',$this->hotel->__get('id'));
        $stmt->execute();
    }
}

?>