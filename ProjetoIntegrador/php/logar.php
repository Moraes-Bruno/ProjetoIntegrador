<?php

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    require '../php/pdo.php';
    require '../oop/usuarioAluno.php';
    
    $usuario = new Usuario();

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if($usuario->validarLogin($email,$senha) == true){
        if(isset($_SESSION['idUser'])){
            header("Location: ../html/home_aluno.php");
        }
        else{
            header("Location: ../html/login.php");
        }
    }
    else{
        header("Location: ../html/login.php");
    } 

}else{
    header("Location: ../html/login.php");
}

