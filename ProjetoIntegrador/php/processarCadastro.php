<?php

require '../php/pdo.php';

/*Dados Principais*/
$CPF = $_POST["cpf"];
$CNPJ = $_POST["CNPJ"];

/*Dados Alunos / Empresarial*/
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$nascimento = $_POST["nascimento"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$cep = $_POST["CEP"];
$Telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];
$estado = $_POST["estado"];

/*Dados Auluno*/
$ra = $_POST["ra"];
$genero = $_POST["genero"];
$curso = $_POST["curso"];

/*Dados empresas*/ 
$fantasia = $_POST["Fantasia"];
$Razao = $_POST["Razao"];
$email_empresa = $_POST["email_empresa"];
$telefone_empresa = $_POST["Telefone_empresa"];
$IE = $_POST["ie"];

/*Cadastrando Aluno no banco de dados*/ 
if (!empty($CPF) && !empty($ra)) {

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

} 
/*Cadastrando Empresa no banco de dados*/ 
else if (!empty($CNPJ)) {

    $sql = "INSERT INTO empresas (nome_empresa, razao_social, cnpj, email_corporativo, senha, Nome, Sobrenome, data_nascimento, cpf,
    telefone, email) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);

    $sql = "INSERT INTO bairros (nome_bairro) VALUES (?)";
    $stmt2 = $conn->prepare($sql);
    
    $sql = "INSERT INTO cidades (nome, estado) VALUES (?, ?)";
    $stmt3 = $conn->prepare($sql);
    
    $sql = "INSERT INTO enderecos (nome, numero, cep_rua, complemento) VALUES (?,?,?,?)";
    $stmt4 = $conn->prepare($sql);

    $sql = "INSERT INTO telefones (telefone) VALUES (?)";
    $stmt5 = $conn->prepare($sql);

    $stmt->execute([$fantasia,$Razao,$CNPJ, $email_empresa,$senha,$nome, $sobrenome, $nascimento, $CPF, $telefone_empresa, $email]);
    $stmt2->execute([$bairro]);
    $stmt3->execute([$cidade, $estado]);
    $stmt4->execute([$cep, $endereco, $numero, $complemento]);
    $stmt5->execute([$Telefone]);

    header("Location: ../html/login.php");
}
/*Caso não tenha nenhum dos dois*/ 
else {
    header("Location: ../html/index.html");
}















