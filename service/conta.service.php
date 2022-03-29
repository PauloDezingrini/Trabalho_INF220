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
        $query = 'select Id_hosp, Valor_restaurante, Valor_total, Forma_pagamento from conta';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function atualizar(){
        $query = 'update conta set Valor_restaurante = :valor_restaurante, Valor_total = :valor_total, Forma_pagamento = :forma_pagamento where Id_hosp = :id';
        $stmt  = $this->conexao->prepare($query);
        $stmt->bindValue(':valor_restaurante',$this->hotel->__get('valor_restaurante'));
        $stmt->bindValue(':valor_total',$this->hotel->__get('valor_total'));
        $stmt->bindValue(':forma_pagamento',$this->hotel->__get('forma_pagamento'));
        $stmt->bindValue(':id',$this->hotel->__get('id'));
        return $stmt->execute();
    }

    public function remover(){
        $query = 'delete from conta where Id_hosp = :id';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id',$this->hotel->__get('id'));
        $stmt->execute();
    }
}

?>