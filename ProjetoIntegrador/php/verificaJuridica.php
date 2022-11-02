<?php

require '../php/pdo.php';

if(isset($_SESSION['idempresa']) && !empty($_SESSION['idempresa'])) {

    require_once '../oop/usuarioAluno.php';
    $u = new Usuario();
    
    $Logged = $u->loggedEmpresa($_SESSION['idempresa']);

    $nome = $Logged['nome_empresa'];
}
else {
    header("Location: ../html/login.php");
}

?>