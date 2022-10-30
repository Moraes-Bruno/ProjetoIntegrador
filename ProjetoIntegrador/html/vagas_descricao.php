<?php

include("../php/pdo.php");

$_GET["id"];

$sql = "SELECT *  FROM vagas INNER JOIN empresas ON vagas.empresa_id = empresas.empresa_id WHERE vaga_id = :id";


$res = $conn->prepare($sql);
$res->bindParam(":id", $_GET["id"]);
$res->execute();

//$qtd = $res->num_rows;

$res = $res->fetch();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vagas</title>
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/vagas.css">
    <link rel="stylesheet" href="../css/vagas_descricao.css">

    <script src="https://kit.fontawesome.com/20764abc40.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <header>
        <a href="home_aluno.php" class="logo">Fatec<span> Vagas</span></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navlist">
            <li><a href="home_aluno.php">Home</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="vagas.php">Vagas</a></li>
        </ul>

        <div class="navDireita">
            <a href="PerfilAluno.php"><img src="../imgs/Paula_redonda_icone.png" class="imgPerfil"alt="Imagem perfil"></a>
            <p>Paula Raquel Lima</p>
        </div>
    </header>


    <main>
        <div class="topo">
            <div class="nome_vaga">
                <p><?php echo $res['nome_vaga'];?></p>
            </div>
            <div class="imagem_canto">
                <img src="../imgs/" alt="imagem ilustrativa" id="quadro">
            </div>
        </div>
        <div class="resumo">
            <div class="esquerda">
                <img src="../imgs/localizacao.png" alt="" class="icones">
                <p class="descricoes">Vaga Remota</p>
                <img src="../imgs/bandeira.png" alt="" class="icones">
                <p class="descricoes"><?php echo $res['cidade_vaga'];?></p>
            </div>
            <div class="direita">
                <img src="../imgs/tempo.png" alt="" class="icones">
                <p class="descricoes">6h diárias</p>
                <img src="../imgs/dinheiro.png" alt="" class="icones">
                <p class="descricoes"><?php echo $res['salario'];?></p>
            </div>

            <h2>Empresa contratante</h2>
            <p class="texto_descritivo"><a href="../23a_visualizacao_perfil_empresa_aluno/23a_visualizacao_perfil_empresa_aluno.html">Cristália</a></p>

            <h2>Descrição da vaga</h2>
            <p class="texto_descritivo"><?php echo $res['descricao'];?></p>

            <h2>Diferenciais</h2>
            <p class="texto_descritivo">É importante ter noções sólidas de HTML, CSS e Java Script. Conhecimentos em PHP.</p>

            <a href="../27_minhas_candidaturas_aluno/27_minhas_candidaturas_aluno.html" class="botao_candidatar">Candidatar-se a Vaga</a>

        </div>      
    </main>

    <footer>
                <img src="../imgs/instagram" alt="insta">
                <img src="../imgs/facebook" alt="face">
    </footer>