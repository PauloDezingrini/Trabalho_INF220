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
        $query = 'update cliente set Nome = :nome, Endereço = :endereco, Nacionalidade = :nac, Telefone = :tel, Senha = :senha where Email = $email';
        $stmt  = $this->conexao->prepare($query);
        $stmt->bindValue(':nome',$this->hotel->__get('nome'));
        $stmt->bindValue(':endereco',$this->hotel->__get('endereco'));
        $stmt->bindValue(':nac',$this->hotel->__get('nac'));
        $stmt->bindValue(':tel',$this->hotel->__get('tel'));
        $stmt->bindValue(':senha',$this->hotel->__get('senha'));
        $stmt->bindValue(':email',$this->hotel->__get('email'));
        return $stmt->execute();
    }

    public function remover(){
        $query = 'delete from cliente where Email = $email';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':email',$this->hotel->__get('email'));
        $stmt->execute();
    }
}

?>