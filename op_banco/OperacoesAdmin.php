<?php
    include_once("../conexao/Conexao.php");
    include_once("../classes/Admin.php");

    class OperacoesAdmin {
        
        private $con;
        private $resultado;
        private $sql;
        private $statement;

        public function logarAdmin(Admin $admin){
            $admin = $admin;
            $this->con = new Conexao;
            $this->con = $this->con->abrirConexao();
            $this->sql = "SELECT * FROM admin WHERE usuario=? AND senha=?";
            $this->statement = $this->con->prepare($this->sql);
            $this->statement->bindValue(1, $admin->getUsuario());
            $this->statement->bindValue(2, $admin->getSenha());
            $this->statement->execute();
            $this->resultado = $this->statement->fetchAll();

            if(sizeof($this->resultado) == 0){
                session_start();
                $_SESSION["erro-login"] = "Impossível realizar login, usuário ou senha incorreto(a)";
                header("location: ../index.php");
            }
            else{
                session_start();
                $_SESSION["sucesso-login"] = "Login realizado com sucesso";
                header("location: ../telas/Menu.php");
                
            }
        }
    }