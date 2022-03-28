<?php

    class Servico {
        private $id_func;
        private $id_hotel;
        private $num_ap;

        public function __get($name){
            return $this->$name;
        }

        public function __set($name,$value){
            $this->$name = $value;
        }
    };
?>