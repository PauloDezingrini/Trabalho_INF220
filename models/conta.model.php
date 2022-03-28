<?php

    class Conta {
        private $id;
        private $valor_restaurante;
        private $valor_total;
        private $forma_pagamento;

        public function __get($name){
            return $this->$name;
        }

        public function __set($name,$value){
            $this->$name = $value;
        }
    };
?>