<?php
    include_once("../conexao/Conexao.php");
    include_once("../classes/Cliente.php");
    
    class OperacoesCliente {

        private $con;
        private $statement;
        private $resultado;
        private $sql;

        public function cadastrarCliente(Cliente $c1){
            $cliente = $c1;
            $this->sql = "INSERT INTO cliente(id,nome,telefone) values (?,?,?)";
            $this->con = new Conexao;
            $this->con = $this->con->abrirConexao();
            $this->statement = $this->con->prepare($this->sql);
            $this->statement->bindValue(1, null);
            $this->statement->bindValue(2, $cliente->getNome());
            $this->statement->bindValue(3, $cliente->getTelefone());
            $this->statement->execute();
            $this->resultado = $this->statement->rowCount();
            if($this->resultado == 0){
                $_SESSION["erro-cadastro"] = "Erro ao cadastrar o cliente, tente novamente";
                 header("location: ../telas/Cadastrar_Cliente.php");
            }
            else{
                $_SESSION["cadastro-concluido"] = "Cliente cadastrado com sucesso";
                header("location: ../telas/Cadastrar_Cliente.php");
            }
        }

        public function deletarCliente(Cliente $c1){
            $cliente = $c1;
            $this->sql = "DELETE FROM cliente WHERE id=?";
            $this->con = new Conexao;
            $this->con = $this->con->abrirConexao();
            $this->statement = $this->con->prepare($this->sql);
            $this->statement->bindValue(1, $cliente->getId());
            $this->statement->execute();
            $this->resultado = $this->statement->rowCount();

            if($this->resultado == 0){
                $_SESSION["erro-remocao"] = "Algo deu errado ao remover, tente novamente";
                header("location: ../telas/Remover_Cliente.php");
            }
            else{
                $_SESSION["sucesso-remocao"] = "Cliente removido com sucesso";
                header("location: ../telas/Remover_Cliente.php");
            }
        }

        public function alterarCliente(Cliente $c1){
            $cliente = $c1;
            if($cliente->getNome() == "" && $cliente->getTelefone() != ""){
                $this->sql = "UPDATE cliente SET telefone=? WHERE id=?";
                $this->con = new Conexao;
                $this->con = $this->con->abrirConexao();
                $this->statement = $this->con->prepare($this->sql);
                $this->statement->bindValue(1, $cliente->getTelefone());
                $this->statement->bindValue(2, $cliente->getId());
                $this->statement->execute();
                $this->resultado = $this->statement->rowCount();
                if($this->resultado == 0){
                    $_SESSION["erro-edicao"] = "Erro ao editar cliente, tente novamente";
                    header("location: ../telas/Editar_Cliente.php");
                }
                else{
                    $_SESSION["sucesso-edicao"] = "Cliente editado com sucesso";
                    header("location: ../telas/Editar_Cliente.php");
                }
            }
            else if($cliente->getNome() != "" && $cliente->getTelefone() == ""){
                $this->sql = "UPDATE cliente SET nome=? WHERE id=?";
                $this->con = new Conexao;
                $this->con = $this->con->abrirConexao();
                $this->statement = $this->con->prepare($this->sql);
                $this->statement->bindValue(1, $cliente->getNome());
                $this->statement->bindValue(2, $cliente->getId());
                $this->statement->execute();
                $this->resultado = $this->statement->rowCount();
                if($this->resultado == 0){
                    $_SESSION["erro-edicao"] = "Erro ao editar cliente, tente novamente";
                    header("location: ../telas/Editar_Cliente.php");
                }
                else{
                    $_SESSION["sucesso-edicao"] = "Cliente editado com sucesso";
                    header("location: ../telas/Editar_Cliente.php");
                }
            }
            else if($cliente->getNome() !== "" && $cliente->getTelefone() != ""){
                $this->sql = "UPDATE cliente SET nome=?, telefone=? WHERE id=?";
                $this->con = new Conexao;
                $this->con = $this->con->abrirConexao();
                $this->statement = $this->con->prepare($this->sql);
                $this->statement->bindValue(1, $cliente->getNome());
                $this->statement->bindValue(2, $cliente->getTelefone());
                $this->statement->bindValue(3, $cliente->getId());
                $this->statement->execute();
                $this->resultado = $this->statement->rowCount();
                if($this->resultado == 0){
                    $_SESSION["erro-edicao"] = "Erro ao editar cliente, tente novamente";
                    header("location: ../telas/Editar_Cliente.php");
                }
                else{
                    $_SESSION["sucesso-edicao"] = "Cliente editado com sucesso";
                    header("location: ../telas/Editar_Cliente.php");
                }
            }
            else if($cliente->getId() != "" && $cliente->getNome() == "" && $cliente->getTelefone() == ""){
                $_SESSION["erro-edicao"] = "Impossível editar sem ao menos 1 campo opicional, preencha corretamente";
                header("location: ../telas/Editar_Cliente.php");
            }
        }

        public function pesquisarCliente(Cliente $c1){
            $cliente = $c1;
            $this->sql = "SELECT * FROM cliente WHERE nome like ?";
            $this->con = new Conexao;
            $this->con = $this->con->abrirConexao();
            $this->statement = $this->con->prepare($this->sql);
            $this->statement->bindValue(1, "%".$cliente->getNome()."%");
            $this->statement->execute();
            $this->resultado = $this->statement->rowCount();

            if($this->resultado == 0){
                $_SESSION["erro-pesquisa"] = "Cliente não encontrado, tente novamente";
                header("location: ../telas/Pesquisar_Cliente.php");
            }
            else {
                $_SESSION["resultado-pesquisa"] = $this->statement->fetchAll();
                header("location: ../telas/Resultado_Pesquisa.php");
            }
        }

        public function listarClientes(){
            $this->sql = "SELECT * FROM cliente";
            $this->con = new Conexao;
            $this->con = $this->con->abrirConexao();
            $this->statement = $this->con->prepare($this->sql);
            $this->statement->execute();
            $this->resultado = $this->statement->fetchAll();
            $_SESSION["lista-cliente"] = $this->resultado;
            header("location: ../telas/Listar_Cliente.php");
        }
    }