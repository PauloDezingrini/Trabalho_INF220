<?php

class ClienteService {

    private $conexao;
    private $cliente;

    public function __construct(PDO $conexao,Cliente $cliente) {
        $this->conexao = $conexao; 
        $this->cliente= $cliente;    
    }

    public function inserir() {
        $query = 'insert into cliente(Nome, Endereço, Nacionalidade, Telefone, Email, Senha)values(:nome, :endereco,:nac, :tel, :email, :senha)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome',$this->cliente->__get('nome'));
        $stmt->bindValue(':endereco',$this->cliente->__get('endereco'));
        $stmt->bindValue(':nac',$this->cliente->__get('nac'));
        $stmt->bindValue(':tel',$this->cliente->__get('tel'));
        $stmt->bindValue(':email',$this->cliente->__get('email'));
        $stmt->bindValue(':senha',$this->cliente->__get('senha'));
        $stmt->execute();
    }

    public function recuperar(){
        $query = 'select Nome, Endereço, Nacionalidade, Telefone, Email from cliente';
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