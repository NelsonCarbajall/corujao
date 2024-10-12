<?php

include './db/banco.php';

if(isset($_POST["submit"]) && !empty($_POST["email"]) && !empty($_POST["senha"])){
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    
    if(validar($email, $senha)){
        
        header("Location: /tectoy/main.php");
        exit();
    } else {
       
        header("Location: /tectoy/index.php"); 
        exit();
    }
} else {
    
    header("Location: /tectoy/index.php");
    exit();
}