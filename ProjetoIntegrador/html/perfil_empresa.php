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

            <picture id="celular">
                <img src="../imgs/Paula_redonda_icone.png" alt="foto de perfil">
            </picture>

            <form action="post" class="formulario">

                <label for="ra">Nome Fantasia</label>
                <input type="text" name="ra">

                <label for="nome">Razão Social</label>
                <input type="text" name="nome">

                <label for="sobrenome">Email Empresa</label>
                <input type="text" name="sobrenome">

                <label for="nascimento">Telefone Empresa</label>
                <input type="text" name="nascimento">

                <label for="genero">CNPJ</label>
                <input type="text" name="genero">

                <div class="links">
                    <a href="recuperarSenha.php">Alterar senha</a>
                </div>

            </form>

            <div class="direita">

                <picture>
                    <img src="../imgs/Paula_redonda_icone.png" alt="foto de perfil">
                </picture>

                
            </div>
            
            <div class="botoes">
                <input id="cadastrar" type="button" value="Salvar">
            </div>

        </main>
        
        <script src="https://unpkg.com/scrollreveal"></script>

<!-- Link JAva Script -->
<script type="text/javascript" src="../js/Nav.js"></script>
</body>
</html>