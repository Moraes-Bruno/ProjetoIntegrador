<!DOCTYPE html> 
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>cadastrar</title>

    <link rel="stylesheet" href="..\css\nav.css">
    <link rel="stylesheet" href="..\css\index.css">
    <script src="https://kit.fontawesome.com/20764abc40.js" crossorigin="anonymous"></script>
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
        <div class="box_cadastrar">
      
            <form class="form" name="cad-user" action="processarCadastro.php" method="POST">
                <h2>Cadastro</h2>
                <div class="inputBox">
                    <input type="text" name="nome"  id="nome" required="required">
                    <span>Nome</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="sobrenome" id="sobrenome" required="required">
                    <span>Sobrenome</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="ra" id="ra" required="required">
                    <span>RA</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="curso" id="curso" required="required">
                    <span>Curso</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="nascimento" id="nascimento" required="required">
                    <span>Data de Nascimento</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" required="required">
                    <span>CPF</span>
                    <i></i>
                </div>
                <div class="links">
                    <a href="cadastrarJuridica.php">é pessoa juridica ? cadastre sua empresa</a>
                </div>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone"required="required">
                    <span>Telefone</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="email" name="email" id="email" required="required">
                    <span>E-mail institucional</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" required="required">
                    <span>Senha</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="genero" id="genero" required="required">
                    <span>Genêro</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="CEP" id="CEP" required="required">
                    <span>CEP</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" required="required">
                    <span>Nome Rua</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="numero" id="numero" required="required">
                    <span>Numero</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="complemento" id="complemento">
                    <span>Complemento</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="bairro" id="bairro" required="required">
                    <span>Bairro</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" required="required">
                    <span>Cidade</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" required="required">
                    <span>Estado</span>
                    <i></i>
                </div>
                <input type="submit" value="Criar Cadastro" name="cad_submit">
            </form>
        </div>
    </section>

    

    <!-- Home section-->

    
    <script src="https://unpkg.com/scrollreveal"></script>

   <!-- Link JAva Script -->
   <script type="text/javascript" src="../js/Nav.js"></script>

</body>

</html>