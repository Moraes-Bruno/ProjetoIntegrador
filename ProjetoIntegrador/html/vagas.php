<?php

require '../php/verifica.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])): ?>

<?php 

$sql = "SELECT * FROM vagas INNER JOIN empresas ON vagas.empresa_id = empresas.IDempresa";

$res = $conn->prepare($sql);
$res->execute();


//$qtd = $res->num_rows;

$res = $res->fetchAll();

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


    <section class="busca">
        <h1 class="titulo-vagas">Vagas para Campinas e região!</h1>
        <p>Quer ser contratado como freelancer (PJ), estagiário ou CLT?</p>
        <p>Então você está no lugar certo!</p>

        <div class="barra-busca">
            <form>
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Digite um cargo, cidade ou estado">
                <button type="submit">Procurar</button>
            </form>
        </div>
    </section>


    <!--<section class="vagas">


        <aside class="filtros">
            <form class="filtros-form">
                <p>Modalidade de trabalho</p>
                <div class="botoes">
                    <input type="checkbox">
                    <label for="">Remoto</label>
                    <input type="checkbox">
                    <label for="">Presencial</label>
                </div>

                <p>Regime de trabalho</p>
                <div class="botoes">
                    <input type="checkbox">
                    <label for="">CLT</label>
                    <input type="checkbox">
                    <label for="">PJ</label>
                </div>

                <p>Vaga para PCD</p>
                <div class="botoes">
                    <input type="checkbox">
                    <label for="">Sim</label>
                    <input type="checkbox">
                    <label for="">Não</label>
                </div>


                <label id="local-trabalho" for="filtro-cidade">Local de trabalho</label>
                <select class="botoes option-cidade" name="filtro-cidade">
                    <option value="">Selecione a cidade</option>
                    <option value="1">Itapira</option>
                    <option value="2">São Paulo</option>
                    <option value="3">Campinas</option>
                    <option value="4">Jacutinga</option>
                </select>


                <button id="botao" type="submit">Filtrar</button>
            </form>
        </aside>!-->



        <section class="vagas_geral">
            <div class="container">
            <?php foreach ($res as $linha) : ?>
                <div class="card">
                    <div class="box">
                        <div class="content">
                            <h2><?php echo $linha['IDvaga'];?></h2>
                            <h3><?php echo $linha['nome_vaga'];?></h3>
                            <p><?php echo $linha['descricao'];?></p>
                            <a href="vagas_descricao.php?id=<?php echo $linha['IDvaga']; ?>" id="detalhes">Ver detalhes</a>
                            <p>Cidade: <?php echo $linha['cidade_vaga'];?></p>
                            <p class="top">Data Fechamento: <?php echo $linha['data_abertura'];?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </section>


    </section>

    <script src="https://unpkg.com/scrollreveal"></script>

<!-- Link JAva Script -->
<script type="text/javascript" src="../js/Nav.js"></script>
</body>

</html>

<?php else: header("Location: ../html/index.html"); endif;?>