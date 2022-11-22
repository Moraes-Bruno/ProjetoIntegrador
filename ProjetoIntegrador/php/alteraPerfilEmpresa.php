<?php

require '../php/verificaJuridica.php';

if(isset($_SESSION['idempresa']) && !empty($_SESSION['idempresa'])){

$id = $_SESSION['idempresa'];
$email = $_POST["email"];
$telefone = $_POST["telefone"];


$sqlupdate = "UPDATE empresas set email_corporativo = '$email',telefone='$telefone' where IDempresa = $id";
$stmt = $conn->query($sqlupdate);

header("Location: ../html/perfil_empresa.php");


}
else{
    header("Location: ../html/home_empresa.php");
}

