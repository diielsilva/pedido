<?php
    include_once("../classes/Cliente.php");
    include_once("../classes/Pedido.php");
    include_once("../conexao/Conexao.php");

    class OperacoesPedido{

        private $con;
        private $statement;
        private $resultado;
        private $sql;

        public function cadastrarPedido(Pedido $p1, Cliente $c1){
            $pedido = $p1;
            $cliente = $c1;
            $this->con = new Conexao;
            $this->con = $this->con->abrirConexao();
            $this->sql = "INSERT INTO pedido(id,datapedido,fk_cliente,statuspedido,descricao) values (?,?,?,?,?)";
            $this->statement = $this->con->prepare($this->sql);
            $this->statement->bindValue(1, null);
            $this->statement->bindValue(2, $pedido->getData());
            $this->statement->bindValue(3, $cliente->getId());
            $this->statement->bindValue(4 ,$pedido->getStatus());
            $this->statement->bindValue(5, $pedido->getDescricao());
            $this->statement->execute();
            $this->resultado = $this->statement->rowCount();

            if($this->resultado == 0){
                $_SESSION["erro-cadastro"] = "Impossível cadastrar, cliente não encontrado, tente novamente";
                header("location: ../telas/Cadastrar_Pedido");
            }
            else{
                $_SESSION["sucesso-cadastro"] = "Pedido cadastrado com sucesso";
                header("location: ../telas/Cadastrar_Pedido");
            }
        }

        public function listarPedido(){
            $this->con = new Conexao;
            $this->con = $this->con->abrirConexao();
            $this->sql = "SELECT cliente.nome,pedido.datapedido,pedido.statuspedido,pedido.descricao FROM cliente INNER JOIN pedido on pedido.fk_cliente = cliente.id";
            $this->statement = $this->con->prepare($this->sql);
            $this->statement->execute();
            $this->resultado = $this->statement->fetchAll();

            $_SESSION["listar-pedido"] = $this->resultado;
        }

        public function editarPedido(Pedido $p1){
            $pedido = $p1;
            $this->con = new Conexao;
            $this->con = $this->con->abrirConexao();
            $this->sql = "UPDATE pedido SET statuspedido=? WHERE id=?";
            $this->statement = $this->con->prepare($this->sql);
            $this->statement->bindValue(1, $pedido->getStatus());
            $this->statement->bindValue(2, $pedido->getId());
            $this->statement->execute();
            $this->resultado = $this->statement->rowCount();

            if($this->resultado == 0){
                $_SESSION["erro-edicao"] = "Erro ao editar, pedido não encontrado, tente novamente";
                header("location: ../telas/Editar_Pedido.php");
                
            }
            else{
                $_SESSION["sucesso-edicao"] = "Pedido editado com sucesso";
                header("location: ../telas/Editar_Pedido.php");
            }
        }
    }