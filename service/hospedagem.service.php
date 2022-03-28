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

    }

    public function atualizar(){

    }

    public function remover(){

    }
}

?>