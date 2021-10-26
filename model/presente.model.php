<?php
    class Presente{
        private $id;
        private $nome;
        private $valor;
        private $link;

        public function __get($attr){
            return $this->$attr;
        }
        public function __set($attr, $valor){
            $this->$attr = $valor;
        }
    }
?>