<?php

include 'pdo.php';

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$ra = $_POST["ra"];
$nascimento = $_POST["nascimento"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$genero = $_POST["genero"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$cep = $_POST["CEP"];
$curso = $_POST["curso"];
$CPF = $_POST["cpf"];
$Telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];
$estado = $_POST["estado"];





$sql = "INSERT INTO alunos (nome,sobrenome,email_inst,data_nascimento,genero,RA,senha,cpf) VALUES (?,?,?,?,?,?,?,?)";
$stmt = $conn->prepare($sql);

$sql = "INSERT INTO bairros (nome_bairro) VALUES (?)";
$stmt2 = $conn->prepare($sql);

$sql = "INSERT INTO cidades (nome, estado) VALUES (?, ?)";
$stmt3 = $conn->prepare($sql);

$sql = "INSERT INTO enderecos (nome, numero, cep_rua, complemento) VALUES (?,?,?,?)";
$stmt4 = $conn->prepare($sql);

$sql = "INSERT INTO telefones (telefone) VALUES (?)";
$stmt5 = $conn->prepare($sql);

$sql = "INSERT INTO cursos (nome_curso) VALUES (?)";
$stmt6 = $conn->prepare($sql);

$stmt->execute([$nome,$sobrenome,$email,$nascimento,$genero,$ra,$senha,$CPF]);
$stmt2->execute([$bairro]);
$stmt3->execute([$cidade, $estado]);
$stmt4->execute([$cep, $endereco, $numero, $complemento]);
$stmt5->execute([$Telefone]);
$stmt6->execute([$curso]);


header("Location: ../html/login.php");










