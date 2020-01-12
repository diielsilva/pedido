<?php

    class Pedido {

        private $id;
        private $data;
        private $fk_cliente;
        private $status;
        private $descricao;

        public function setId($id){
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }

        public function setData($data){
            $this->data = $data;
        }

        public function getData(){
            return $this->data;
        }

        public function setFk_Cliente($fk_cliente){
            $this->fk_cliente = $fk_cliente;
        }

        public function getFk_Cliente(){
            return $this->fk_cliente;
        }

        public function setStatus($status){
            $this->status = $status;
        }
        
        public function getStatus(){
            return $this->status;
        }

        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }

        public function getDescricao(){
            return $this->descricao;
        }
        
    }