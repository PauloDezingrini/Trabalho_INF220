<?php

class FuncionarioService {

    private $conexao;
    private $conta;

    public function __construct(PDO $conexao,Conta $conta) {
        $this->conexao = $conexao; 
        $this->conta= $conta;    
    }

    public function inserir() {
        $query = 'insert into conta(Id_hosp, Valor_restaurante, Valor_total, Forma_pagamento)values(:id, :valor_restaurante,:valor_total, :forma_pagamento)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id',$this->conta->__get('id'));
        $stmt->bindValue(':valor_restaurante',$this->conta->__get('valor_restaurante'));
        $stmt->bindValue(':valor_total',$this->conta->__get('valor_total'));
        $stmt->bindValue(':forma_pagamento',$this->conta->__get('forma_pagamento'));
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