<?php

    class Conexao{

        private $conexao;

        public function abrirConexao(){
            try{
                $this->conexao = new PDO("mysql:host=localhost;dbname=pedido","root","");
                return $this->conexao;
            }
            catch(PDOException $execao){
                echo "Algo deu errado";
                echo "<br>Código do erro: ".$execao;
            }
        }

        public function fecharConexao(){
            $this->conexao = null;
        }
    }