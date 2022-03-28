<?php

    class Cliente {
        private $nome;
        private $Endereco;
        private $nac;
        private $tel;
        private $email;
        private $senha;

        public function __get($name){
            return $this->$name;
        }

        public function __set($name,$value){
            $this->$name = $value;
        }
    };
?>