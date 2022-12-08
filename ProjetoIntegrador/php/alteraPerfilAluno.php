<?php

require '../php/verifica.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])){

//Tabela aluno
$id = $_SESSION['idUser'];
$genero = $_POST['genero'];
$competencias = $_POST['competencias'];
$modalidade = $_POST['modalidade'];
$interesse = $_POST['interesse'];
$biografia = $_POST['Biografia'];
$experiencia = $_POST['experiencia'];

//tabelas endereço
$cidade = $_POST['cidade'];

//tabela telefone
//$telefone = $_POST['telefone'];

//tabela link
$link = $_POST['links'];

$sqlu = "UPDATE alunos set resumo_experiencia = '$experiencia',regiao_interesse='$interesse',genero='$genero',modalidade_preferencia='$modalidade',biografia='$biografia',competencias='$competencias' where IDaluno='$id'";
$stmt = $conn->query($sqlu);

$sql2 = " UPDATE links SET link= '$link' where id_aluno='$id' ";
$stmt2 = $conn->query($sql2);


header("Location: ../html/PerfilAluno.php");


}
else{
    header("Location: ../html/home_aluno.php");
}