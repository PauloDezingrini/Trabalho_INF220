<?php

class ReservaService{
    
    private $conexao;
    private $reserva;

    public function __construct(PDO $conexao,Reserva $reserva) {
        $this->conexao = $conexao; 
        $this->reserva= $reserva;    
    }

    public function inserir() {

    }

    public function recuperar(){

    }

    public function atualizar(){

    }

    public function remover(){

    }
}

?>