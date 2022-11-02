<?php

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    require '../php/pdo.php';
    require '../oop/usuarioAluno.php';
    
    $usuario = new Usuario();

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if($usuario->validarLoginEmpresa($email,$senha) == true){
        if(isset($_SESSION['idempresa'])){
            echo $_SESSION['idempresa'];
            header("Location: ../html/home_empresa.php");
        }
        else{
            header("Location: ../html/loginjuridica.php");
        }
    }
    else{
        header("Location: ../html/loginjuridica.php");
    }

}else{
    header("Location: ../html/loginjuridica.php");
}