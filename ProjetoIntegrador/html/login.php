<!DOCTYPE html> 
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link rel="stylesheet" href="..\css\nav.css">
    <link rel="stylesheet" href="..\css\index.css">

    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>

    <!-- Header -->
    <header>
        <a href="index.html" class="logo">Fatec<span> Vagas</span></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navlist">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="vagas.php">Vagas</a></li>
        </ul>

        <div class="h-btn">
            <a href="login.php" class="sign-in">Entrar</a>
        </div>
    </header>

    <section class="fundo_login">
        <div class="box_login">
            <form class="form" action="../php/logar.php" method="POST">
                <h2>Login Aluno</h2>
                <div class="inputBox">
                    <input type="email" name="email" required="required">
                    <span>E-mail</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" name="senha" required="required">
                    <span>Senha</span>
                    <i></i>
                </div>
                <div class="links">
                    <a href="recuperarSenha.php">Esqueceu a senha</a>
                    <a href="cadastrar.php">Cadastrar</a>
                </div>
                    <input type="submit" value="Entrar">
                    <a href="loginjuridica.php" class="btn-empresa">Logar Como Empresa</a>
            </form>
        </div>
    </section>

    <!-- Home section-->

    
    <script src="https://unpkg.com/scrollreveal"></script>

   <!-- Link JAva Script -->
   <script type="text/javascript" src="../js/Nav.js"></script>

</body>

</html>d
    </footer>
</body>
</html>