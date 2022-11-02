<?php

include '../php/pdo.php';

/*Variaveis Recebe informacoes*/

$nome = $_POST["nome"];
$salario = $_POST["salario"];
$nivel = $_POST["nivel"];
$abertura = $_POST["abertura"];
$fechemento = $_POST["fechemento"];
$modelo = $_POST["modelo"];
$modalidade = $_POST["modalidade"];
$cidade = $_POST["cidade"];
$Biografia = $_POST["Biografia"];
$IDempresa = $_SESSION['idempresa'];
$experiencia = $_POST["experiencia"];
$links = $_POST["links"];


$sql = "INSERT INTO vagas (nome_vaga, salario, nivel_vaga, data_abertura, data_fechamento, 
modelo_contrataco, modalidade_de_trabalho, cidade_vaga, descricao,empresa_id ,experiencia, links) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $conn->prepare($sql);

$stmt->execute([$nome, $salario, $nivel, $abertura, $fechemento, $modelo, $modalidade, $cidade, $Biografia,$IDempresa, $experiencia, $links]);

header("Location: ../html/cadastrarVaga.php");

?>
