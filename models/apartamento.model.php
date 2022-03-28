<?php

    class Apartamento {
        private $num_ap;
        private $id_filial;
        private $id_tipo;

        public function __get($name){
            return $this->$name;
        }

        public function __set($name,$value){
            $this->$name = $value;
        }
    }

?>