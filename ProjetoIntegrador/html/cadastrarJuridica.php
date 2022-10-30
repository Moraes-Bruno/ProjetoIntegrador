<!DOCTYPE html> 
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastrar</title>

    <link rel="stylesheet" href="../css/nav.css">
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
        <div class="box_cadastrarCpnj">
            <form class="form" name="cad-user" action="../php/processarCadastro.php" method="POST">
                <h2>Dados Empresa</h2>
                <div class="inputBox">
                    <input type="text" name="Fantasia" required="required">
                    <span>Nome Fantasia</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="Razao" required="required">
                    <span>Razão Social</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="email" name="email_empresa" required="required">
                    <span>Email Empresa</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="tel" name="Telefone_empresa" required="required">
                    <span>Telefone Empresa</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="CNPJ" required="required">
                    <span>CNPJ</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="ie" required="required">
                    <span>Inscrição Estadual</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" name="senha" required="required">
                    <span>Senha</span>
                    <i></i>
                </div>

                <br>
                <h2>Dados Pessoais</h2>

                <div class="inputBox">
                    <input type="text" name="nome" required="required">
                    <span>Nome</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="sobrenome" required="required">
                    <span>Sobrenome</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="nascimento" required="required">
                    <span>Data de Nascimento</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="cpf" required="required">
                    <span>CPF</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="tel" name="telefone" required="required">
                    <span>Telefone</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="email" name="email"  required="required">
                    <span>E-mail</span>
                    <i></i>
                </div>

                <br>
                <h2>Endereço</h2>

                <div class="inputBox">
                    <input type="text" name="CEP" required="required">
                    <span>Cep</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="endereco" required="required">
                    <span>Endereço</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="numero" required="required">
                    <span>Numero</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="complemento" required="required">
                    <span>Complemento</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="bairro" required="required">
                    <span>Bairro</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="cidade" required="required">
                    <span>Cidade</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="estado" required="required">
                    <span>Estado</span>
                    <i></i>
                </div>
                <input type="submit" value="Criar Cadastro">
            </form>
        </div>
    </section>

    

    <!-- Home section-->

    
    <script src="https://unpkg.com/scrollreveal"></script>

   <!-- Link JAva Script -->
   <script type="text/javascript" src="../js/Nav.js"></script>

</body>

</html>