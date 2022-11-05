<?php

require '../php/verificaJuridica.php';

if(isset($_SESSION['idempresa']) && !empty($_SESSION['idempresa'])): ?>

<?php 
$idempresa = $_SESSION['idempresa'];
$sql = "SELECT * FROM vagas INNER JOIN empresas ON vagas.empresa_id = empresas.IDempresa WHERE IDempresa = $idempresa ";

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
    <title>Meu Perfil</title>
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/cadastrarVaga.css">
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
            <li><a href="cadastrarVaga.php">Minhas Vagas</a></li>
        </ul>

        <div class="navDireita">
            <a href="perfil_empresa.php"><img src="../imgs/Paula_redonda_icone.png" class="imgPerfil"alt="Imagem perfil"></a>
            <p><?php echo $nome?></p>
            <div class="h-btn">
                <a href="../php/logoutjuridica.php" class="sign-in">Sair</a>    
            </div>
        </div>
    </header>

    <p id="mv">Cadastrar Vagas</p>

        <main>


            <form action="../php/vagasCadastro.php" class="form" method="POST">
                <div class="coluna">
                    <div class="esquerda">
                        <div class="column">
                            <label for="nome">Nome da Vaga</label>
                            <input type="text" name="nome" id="nome" required="required">
                            <label for="nivel">Nivel da vaga</label>
                            <input type="text" name="nivel" id="nivel" required="required">
                            <label for="modelo">Modelo de contratação</label>
                            <input type="text" name="modelo" id="modelo" required="required">
                            <label for="abertura">Data de abertura</label>
                            <input type="date" name="abertura" id="abertura" required="required">
                            <label for="fechamento">Data de fechamento</label>
                            <input type="date" name="fechemento" id="fechemento" required="required">
                            <label for="modalidade">Modalidade de trabalho</label>
                            <input type="text" name="modalidade" id="modalidade" required="required">
                            <label for="salario">Salário</label>
                            <input type="text" name="salario" id="salario" required="required">
                            <label for="cidade">Cidade da vaga</label>
                            <input type="text" name="cidade" id="cidade" required="required">
                        </div>
                    </div>
                    <div class="direita">
                        <div class="column">
                            <p id="bio">Descrição</p>
                            <textarea class="campoDireita"name="Biografia" id="Biografia" cols="30" rows="10" required="required"></textarea>
                            <p>Requisitos</p>
                            <textarea class="campoDireita"name="experiencia" id="experiencia" cols="30" rows="10" required="required"></textarea>
                            <p>Benefícios</p>
                            <textarea class="campoDireita"name="links" id="links" cols="30" rows="10" required="required"></textarea>
                            <div class="botoes"><input id="cadastrar" type="submit" value="Salvar"></div>
                            
                        </div>
                    </div>
                </div>
            </form>

        </main>
        
       

        <p id="mv">Minhas Vagas</p>
        
        <section>
            <div class="container">
            <?php foreach ($res as $linha) : ?>
                <div class="card">
                    <div class="box">
                        <div class="content">
                            <h2><?php echo $linha['IDvaga'];?></h2>
                            <h3><?php echo $linha['nome_vaga'];?></h3>
                            <p><?php echo $linha['descricao'];?></p>
                            <a href="#">Saiba Mais</a>
                            <p class="top">Data Fechamento: <?php echo $linha['data_abertura'];?></p>
                            <p>Cidade: <?php echo $linha['cidade_vaga'];?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </section>

        <script src="https://unpkg.com/scrollreveal"></script>

<!-- Link JAva Script -->
<script type="text/javascript" src="../js/Nav.js"></script>
</body>
</html>

<?php else: header("Location: ../html/index.html"); endif;?>