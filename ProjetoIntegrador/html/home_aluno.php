<?php

require '../php/verifica.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])): ?>


<!DOCTYPE html> 
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>

    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css\index.css">
    <script src="https://kit.fontawesome.com/20764abc40.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>

    <!-- Header -->
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

    <!-- Home section-->

    <section class="home" id="home">
        <div class="home-text">
            <h1>Bem-Vindo a <br> <span>Fatec</span></h1>
            <h4><?php echo $nome;?></h4>
            <a href="vagas.php" class="btn">Saiba Mais</a>
        </div>
    </section>
    </section>

    <script src="https://unpkg.com/scrollreveal"></script>

<!-- Link JAva Script -->
<script type="text/javascript" src="../js/Nav.js"></script>

</body>

</html>


<?php else: header("Location: ../html/login.php"); endif;?>

