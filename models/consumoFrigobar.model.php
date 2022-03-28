<?php

    class ConsumoFrigobar {
        private $produto;
        private $quantidade;
        private $data_consumo;
        private $valor_unit;
        private $id;
        private $registrado;
        private $conta;

        public function __get($name){
            return $this->$name;
        }

        public function __set($name,$value){
            $this->$name = $value;
        }
    };
?>