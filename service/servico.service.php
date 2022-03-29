<?php


class ServicoService{

    private $conexao;
    private $servico;

    public function __construct(PDO $conexao,Servico $servico) {
        $this->conexao = $conexao; 
        $this->servico= $servico;    
    }
    public function inserir() {
        $query = 'insert into serviços(Id_func, N_Ap, Id_filial)values(:id_func, :num_ap, :id_hotel)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id_func',$this->servico->__get('id_func'));
        $stmt->bindValue(':num_ap',$this->servico->__get('num_ap'));
        $stmt->bindValue(':id_hotel',$this->servico->__get('id_hotel'));
        $stmt->execute();
    }

    public function recuperar(){
        $query = 'select Id_func, N_Ap, Data, Id_filial from serviços';
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