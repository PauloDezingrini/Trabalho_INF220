<?php

    class Reserva {
        private $id;
        private $n_pessoas;
        private $data_saida;
        private $data_entrada;
        private $cancelado;
        private $id_hotel;
        private $id_tipo;
        private $email_cliente;

        public function __get($name){
            return $this->$name;
        }

        public function __set($name,$value){
            $this->$name = $value;
        }
    };
?>