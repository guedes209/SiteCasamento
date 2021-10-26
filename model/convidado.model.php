<?php
    class Convidado{
        private $id;
        private $nome;
        private $confirmado;

        public function __get($attr){
            return $this->$attr;
        }
        public function __set($attr, $valor){
            $this->$attr = $valor;
        }
    }
?>