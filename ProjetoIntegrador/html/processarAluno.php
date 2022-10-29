<?php

include 'pdo.php';

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$ra = $_POST["ra"];
$nascimento = $_POST["nascimento"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$genero = $_POST["genero"];

$sql = "INSERT INTO alunos (nome,sobrenome,email_inst,data_nascimento,genero,RA,senha) VALUES (?,?,?,?,?,?,?)";

$stmt = $conn->prepare($sql);

$stmt->execute([$nome,$sobrenome,$email,$nascimento,$genero,$ra,$senha]);











