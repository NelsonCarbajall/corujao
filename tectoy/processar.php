<?php
include './db/banco.php';


    $marca = $_POST["marca_produto"];
    $tipo = $_POST["tipo_produto"];
    $descricao = $_POST["descricao_produto"];
    $preco = $_POST["preco_produto"];

    function itens(){
        header("Location: /tectoy/itens.php");}

    if(registrar($marca, $tipo, $descricao, $preco)){

    
        itens();
    }


    
    





?>