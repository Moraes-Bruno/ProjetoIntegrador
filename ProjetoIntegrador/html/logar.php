<?php

if(isset($_POST['email']) || !empty($_POST['email_empresa']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    require 'pdo.php';
    require '../oop/UsuarioClass.php';
    
    $usuario = new Usuario();

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['email_corporativo']);
    $senha = addslashes($_POST['senha']);

    $usuario->validarLogin($email,$senha, $email_empresa);

    


}else{
    header("Location: login.php");
}

