<?php
    
    class Camareira{
        private $id_func;
        private $nome;

        
        public function __get($name){
            return $this->$name;
        }

        public function __set($name,$value){
            $this->$name = $value;
        }
    }
?>