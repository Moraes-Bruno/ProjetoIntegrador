<?php

require '../php/verifica.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])): ?>

<?php

$sql = "SELECT *  FROM vagas INNER JOIN empresas ON vagas.empresa_id = empresas.IDempresa WHERE IDvaga = :idvaga";


$res = $conn->prepare($sql);
$res->bindParam(":idvaga", $_GET["id"]);
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
    <link rel="stylesheet" href="../css/index.css">
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
            <li><a href="vagas.php">Vagas</a></li>
            <li><a href="#">Minhas Vagas</a></li>
        </ul>

        <div class="navDireita">
            <a href="PerfilAluno.php"><img src="../imgs/Paula_redonda_icone.png" class="imgPerfil"alt="Imagem perfil"></a>
            <p><?php echo $nome;?></p>
            <div class="h-btn">
                <a href="login.php" class="sign-in">Sair</a>    
            </div>
        </div>
        
    </header>

    <section>
        <div class="background">
            <div class="vaga">
                <h1><?php echo $res['nome_vaga'];?></h1>
            </div>
            <div class="margim">
                <h3>Descrição da Vaga</h3>
                <p><?php echo $res['descricao'];?></p>
            </div>
            <div class="margim">
                <h1>Experiencias:</h1>
                <p><?php echo $res['experiencia'];?></p>
            </div>
            <div>
                <h1>O que nós Oferecemos:</h1>
                <p>Salario: R$ <?php echo $res['salario'];?></p>
                <p>Beneficios: </p>
            </div>
            <div  class="margim2">
                <p>Horário de trabalho:</p>
                <p>Abertura da Vaga: <?php echo $res['data_abertura'];?></p>
                <p>Fechamento da Vaga: <?php echo $res['data_fechamento'];?></p>
                <p>Cidade: <?php echo $res['cidade_vaga'];?></p>
            </div>
            <input type="submit" value="Canditar a Vaga">
        </div>
    </section>

</body>

<?php else: header("Location: ../html/index.html"); endif;?>