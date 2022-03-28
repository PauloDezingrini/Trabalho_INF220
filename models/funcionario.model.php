<?php

    class Funcionario {
        private $id;
        private $cargo;
        private $nome;
        private $local_trabalho;

        public function __get($name){
            return $this->$name;
        }

        public function __set($name,$value){
            $this->$name = $value;
        }
    };
?>