<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/headerFooter.css">
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://kit.fontawesome.com/20764abc40.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <a href="home.html" class="logo">Fatec<span> Vagas</span></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navlist">
            <li><a href="#">Home</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Home</a></li>
        </ul>

        <div class="h-btn">
            <a href="login.php" class="sign-in">Entrar</a>
        </div>
    </header>
    <main>
        <p>Login</p>
        <form action="POST">
            <input type="text" name="email" placeholder="E-mail">
            <input type="password" name="senha" placeholder="Senha">
        </form>

        <div class="opcoes">
            <a href="recuperarSenha.php" id="senha">Esqueci a senha</a>
            <a href="cadastrar.php" id="cadastrar">Cadastrar</a>
        </div>
        <input id="Botao"type="submit" value="Login">
    </main>
    <footer class="footer">
        <a href="https://www.fatecitapira.edu.br/">Fatec Itapira</a>
        <div class="imgs-footer">

            <i class="fa-brands fa-square-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
        </div>
    </footer>
</body>
</html>