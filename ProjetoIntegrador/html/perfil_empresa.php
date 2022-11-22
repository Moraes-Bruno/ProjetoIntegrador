<?php

require '../php/verificaJuridica.php';

if(isset($_SESSION['idempresa']) && !empty($_SESSION['idempresa'])):?>
<?php

$idempresa = $_SESSION['idempresa'];
$sql = "SELECT * FROM empresas where IDempresa=$idempresa";
$stmt = $conn->query($sql);

$stmt = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/perfil.css">
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

        <main>

            <picture id="celular">
                <img src="../imgs/Paula_redonda_icone.png" alt="foto de perfil">
            </picture>

            <form method="post" action="../php/alteraPerfilEmpresa.php" class="formulario">

                <label for="ra">Nome Fantasia</label>
                <input type="text" name="nome" readonly value=<?php echo $stmt['nome_empresa']?>>

                <label for="nome">Razão Social</label>
                <input type="text" name="razao" readonly  value=<?php echo $stmt['razao_social']?>>

                <label for="sobrenome">Email Empresa</label>
                <input type="text" name="email" value=<?php echo $stmt['email_corporativo']?>>

                <label for="nascimento">Telefone Empresa</label>
                <input type="text" name="telefone" value=<?php echo $stmt['telefone']?>>

                <label for="genero">CNPJ</label>
                <input type="text" name="cnpj" readonly  value=<?php echo $stmt['cnpj']?>>

               
                <div class="botoes">
                <input id="cadastrar" type="submit" value="Alterar">
                </div>

            </form>

            <div class="direita">

                <picture>
                    <img src="../imgs/Paula_redonda_icone.png" alt="foto de perfil">
                </picture>
                <div class="links">
                    <a href="recuperarSenha.php">Alterar senha</a>
                </div>

                
            </div>
            
            
          

        </main>
        
        <script src="https://unpkg.com/scrollreveal"></script>

<!-- Link JAva Script -->
<script type="text/javascript" src="../js/Nav.js"></script>
</body>
</html>

<?php else: header("Location: ../html/index.html"); endif;?>