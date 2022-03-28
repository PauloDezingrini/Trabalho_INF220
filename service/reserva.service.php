<?php

class ReservaService{
    
    private $conexao;
    private $reserva;

    public function __construct(PDO $conexao,Reserva $reserva) {
        $this->conexao = $conexao; 
        $this->reserva= $reserva;    
    }

    public function inserir() {
        $query = 'insert into reservas(Id_reserva, N_pessoas, Data_saida, Data_entrada, Cancelado, Id_tipo, Reservado_onde, Email_cliente)values(:id, :n_pessoas, :data_saida, :data_entrada, :cancelado, :id_hotel, :email_cliente)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id',$this->reserva->__get('id'));
        $stmt->bindValue(':n_pessoas',$this->reserva->__get('n_pessoas'));
        $stmt->bindValue(':data_saida',$this->reserva->__get('data_saida'));
        $stmt->bindValue(':data_entrada',$this->reserva->__get('data_entrada'));
        $stmt->bindValue(':cancelado',$this->reserva->__get('cancelado'));
        $stmt->bindValue(':id_hotel',$this->reserva->__get('id_hotel'));
        $stmt->bindValue(':email_cliente',$this->reserva->__get('email_cliente'));
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