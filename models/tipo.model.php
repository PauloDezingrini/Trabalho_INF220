<?php

    class Tipo {
        private $id;
        private $n_cama_casal;
        private $n_cama_solteiro;
        private $tv;
        private $frigobar;
        private $adaptado;
        private $diaria;

        public function __get($name){
            return $this->$name;
        }

        public function __set($name,$value){
            $this->$name = $value;
        }
    };
?>