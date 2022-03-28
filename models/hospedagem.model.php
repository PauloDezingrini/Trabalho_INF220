<?php

    class Hospedagem {
        private $id;
        private $check_in;
        private $check_out;
        private $num_ap;
        private $id_filial;
        private $email_cliente;

        public function __get($name){
            return $this->$name;
        }

        public function __set($name,$value){
            $this->$name = $value;
        }
    };
?>