<?php

require '../php/pdo.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])) {

    require_once '../oop/usuarioAluno.php';
    $u = new Usuario();
    
    $Logged = $u->logged($_SESSION['idUser']);

    $nome = $Logged['nome'];
}
else {
    header("Location: ../html/login.php");
}

?>