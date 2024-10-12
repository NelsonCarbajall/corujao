<?php
include './db/banco.php';


   
    $id_produto = $_POST['excluir'];

  
   excluir($id_produto);


    header("Location: ./itens.php"); 
    exit();



?>