<?php

class ReservaService{
    
    private $conexao;
    private $reserva;

    public function __construct(PDO $conexao,Reserva $reserva) {
        $this->conexao = $conexao; 
        $this->reserva= $reserva;    
    }

    public function inserir() {
        $query = 'insert into reservas(Id_reserva, N_pessoas, Data_saida, Data_entrada, Cancelado, Id_tipo, Reservado_onde, Email_cliente)values(:id, :n_pessoas, :data_saida, :data_entrada, :cancelado, :id_tipo , :id_hotel, :email_cliente)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id',$this->reserva->__get('id'));
        $stmt->bindValue(':n_pessoas',$this->reserva->__get('n_pessoas'));
        $stmt->bindValue(':data_saida',$this->reserva->__get('data_saida'));
        $stmt->bindValue(':data_entrada',$this->reserva->__get('data_entrada'));
        $stmt->bindValue(':cancelado',$this->reserva->__get('cancelado'));
        $stmt->bindValue(':id_hotel',$this->reserva->__get('id_hotel'));
        $stmt->bindValue(':id_tipo',$this->reserva->__get('id_tipo'));
        $stmt->bindValue(':email_cliente',$this->reserva->__get('email_cliente'));
        $stmt->execute();
    }

    public function recuperar(){
        $query = 'select Id_reserva, N_pessoas, Data_saida, Data_entrada, Cancelado, Id_tipo, Reservado_onde, Email_cliente from reservas';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function recuperarPorId(){
        $query = 'select N_pessoas, Data_saida, Data_entrada, Cancelado, Id_tipo, Reservado_onde, Email_cliente from reservas where Id_reserva = :id';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id',$this->reserva->__get('id'));
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function recuperarPorFilial(){
        $query = 'select Id_tipo,Data_saida, Data_entrada from reservas where Reservado_onde = :id_hotel';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id_hotel',$this->reserva->__get('id_hotel'));
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function recuperarPorEmail(){
        $query = 'select Id_reserva from reservas where Email_cliente = :email_cliente';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':email_cliente',$this->reserva->__get('email_cliente'));
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function atualizar(){
        $query = 'update reservas set N_pessoas = :n_pessoas, Data_saida = :data_saida, Data_entrada = :data_entrada, Cancelado = :cancelado, Id_tipo = :id_tipo, Reservado_onde = :id_hotel where Id_reserva = :id';
        $stmt  = $this->conexao->prepare($query);
        $stmt->bindValue(':n_pessoas',$this->hotel->__get('n_pessoas'));
        $stmt->bindValue(':data_saida',$this->hotel->__get('data_saida'));
        $stmt->bindValue(':data_entrada',$this->hotel->__get('data_entrada'));
        $stmt->bindValue(':cancelado',$this->hotel->__get('cancelado'));
        $stmt->bindValue(':id_tipo',$this->hotel->__get('id_tipo'));
        $stmt->bindValue(':id_hotel',$this->hotel->__get('id_hotel'));
        $stmt->bindValue(':id',$this->hotel->__get('id'));
        return $stmt->execute();
    }

    public function remover(){
        $query = 'delete from reservas where Id_reserva = :id';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id',$this->hotel->__get('id'));
        $stmt->execute();
    }
}

?>