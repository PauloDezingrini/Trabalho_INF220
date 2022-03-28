<?php

    class Hotel {
        private $id;
        private $cidade;
        private $estado;

        public function __get($name){
            return $this->$name;
        }

        public function __set($name,$value){
            $this->$name = $value;
        }
    };
?>