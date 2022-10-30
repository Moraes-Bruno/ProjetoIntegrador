<?php

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    require '../php/pdo.php';
    require '../oop/UsuarioClass.php';
    
    $usuario = new Usuario();

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    $usuario->validarLogin($email,$senha);

    


}else{
    header("Location: login.php");
}

