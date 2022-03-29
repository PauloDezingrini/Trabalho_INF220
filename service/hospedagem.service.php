<?php

class HospedagemService {

    private $conexao;
    private $hospedagem;

    public function __construct(PDO $conexao,hospedagem $hospedagem) {
        $this->conexao = $conexao; 
        $this->hospedagem= $hospedagem;    
    }

    public function inserir() {
        $query = 'insert into hospedagem(Id_hosp, check_in, check_out, N_Ap, Id_filial, Email_cliente)values(:id, :check_in, :check_out, :num_ap, :id_filial, :email_cliente)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id',$this->hospedagem->__get('id'));
        $stmt->bindValue(':check_in',$this->hospedagem->__get('check_in'));
        $stmt->bindValue(':check_out',$this->hospedagem->__get('check_out'));
        $stmt->bindValue(':num_ap',$this->hospedagem->__get('num_ap'));
        $stmt->bindValue(':id_filial',$this->hospedagem->__get('id_filial'));
        $stmt->bindValue(':email_cliente',$this->hospedagem->__get('email_cliente'));
        $stmt->execute();
    }

    public function recuperar(){
        $query = 'select Id_hosp, check_in, check_out, N_Ap, Id_filial, Email_cliente from hospedagem';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function atualizar(){
        $query = 'update hospedagem set N_Ap = :num_ap, Email_cliente = :email_cliente where Id_hosp = :id';
        $stmt  = $this->conexao->prepare($query);
        $stmt->bindValue(':num_ap',$this->hotel->__get('num_ap'));
        $stmt->bindValue(':email_cliente',$this->hotel->__get('email_cliente'));
        $stmt->bindValue(':id',$this->hotel->__get('id'));
        return $stmt->execute();
    }

    public function remover(){
        $query = 'delete from hospedagem where Id_hosp = :id';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id',$this->hotel->__get('id'));
        $stmt->execute();
    }
}

?>