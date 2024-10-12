<?php

    function ItensProduto(){
        
        $user = "root";
        $password = "";

        try{
            $cubo = new PDO("mysql:host=localhost;dbname=corujao", $user, $password);
            $query = $cubo->prepare("select id_produto, marca_produto, tipo_produto, descricao_produto, preco_produto from produtos");
            $query->execute();
            $produtos = $query->fetchAll();
            return $produtos;
        }
        catch(PDOException $e){
            echo $e->getMessage();
            return null;
            }
        }
    



        function registrar($marca_produto, $tipo_produto, $descricao_produto, $preco_produto) {

            $user = "root";
            $password = "";
        
            try{
            $conn = new PDO("mysql:host=localhost;dbname=corujao", $user, $password);
            $query = $conn->prepare("insert into produtos(marca_produto, tipo_produto, descricao_produto, preco_produto)
            values (:marca_produto, :tipo_produto, :descricao_produto, :preco_produto)");
            $query->bindValue(":marca_produto", $marca_produto);
            $query->bindValue(":tipo_produto", $tipo_produto);
            $query->bindValue(":descricao_produto", $descricao_produto);
            $query->bindValue(":preco_produto", $preco_produto);
            $query->execute();
            
            return true;
            
            }catch(PDOException $e){
            echo $e->getMessage();
            return false;
            }

        }



        function cadastrarCliente($nome, $email, $senha){

            $user = "root";
            $password = "";
        
            try{
            $conn = new PDO("mysql:host=localhost;dbname=corujao", $user, $password);
            $query = $conn->prepare("insert into cliente( nome_cliente, email_cliente, senha_cliente)
            values (:nome_cliente, :email_cliente, :senha_cliente)");
            $query->bindValue(":nome_cliente", $nome);
            $query->bindValue(":email_cliente", $email);
            $query->bindValue(":senha_cliente", $senha);
            $query->execute();
            
            return true;
            
            }catch(PDOException $e){
            echo $e->getMessage();
            return false;
            }

        }


        function validar($email, $senha){

            $user = "root";
            $password = "";
            
        
            try {
                
                $conn = new PDO("mysql:host=localhost;dbname=corujao", $user, $password);
                
                $query = "SELECT * FROM cliente WHERE email_cliente = :email AND senha_cliente = :senha";
                $validando = $conn->prepare($query);
                
                
                $validando->execute(array(
                    ':email' => $email,
                    ':senha' => $senha
                ));
                
                
                if($validando->rowCount() > 0){
                    return true; 
                } else {
                    return false; 
                }
        
            } catch(PDOException $e){
            echo $e->getMessage();
            return false;
            }
        }
        
        function excluir($id){
            $user = "root";
            $password = "";
        
            try {
                // Conexão com o banco de dados
                $conn = new PDO("mysql:host=localhost;dbname=corujao", $user, $password);
                
                // Prepara e executa a query de exclusão
                $query = $conn->prepare("DELETE FROM produtos WHERE id_produto = :id");
                $query->bindValue(":id", $id);
                $query->execute();
                //$result->execute();
                
                // Fecha a conexão
                $conn = null;
        
                // Retorna true se a exclusão for bem-sucedida
                return $query;
        
            } catch(PDOException $e) {
                echo "Erro: " . $e->getMessage();
                return false;
            }
        }
        

        

        

        


?>