<?php


require '../php/verificaJuridica.php';

if(isset($_SESSION['idempresa']) && !empty($_SESSION['idempresa'])){

$id = $_GET["id"];
$nome_vaga = $_POST["nome"];
$nivel_vaga = $_POST["nivel"];
$modelo_contrataco = $_POST["modelo"];
$data_abertura = $_POST["abertura"];
$data_fechamento = $_POST["fechemento"];
$modalidade_de_trabalho = $_POST["modalidade"];
$salario = $_POST["salario"];
$cidade_vaga = $_POST["cidade"];
$descricao = $_POST["descricao"];
$experiencia = $_POST["experiencia"];
$links = $_POST["links"];


$sqlUpdate = "UPDATE vagas Set nome_vaga='$nome_vaga',salario='$salario',nivel_vaga='$nivel_vaga',data_abertura='$data_abertura',data_fechamento='$data_fechamento',modelo_contrataco='$modelo_contrataco',modalidade_de_trabalho='$modalidade_de_trabalho',cidade_vaga='$cidade_vaga',descricao='$descricao',experiencia='$experiencia',links='$links' where IDvaga=$id";
$stmt = $conn->query($sqlUpdate);

header("Location: ../html/cadastrarVaga.php");

}
else{
    header("Location: ../html/cadastrarVaga.php");
}

?>