<?php
include './db/banco.php';

function login(){
    header("Location: /tectoy/index.php");
}

$nome = $_POST["nome_cliente"];
$email = $_POST["email_cliente"];
$senha = $_POST["senha_cliente"];

if(cadastrarCliente($nome, $email, $senha)){

    login();

}

?>