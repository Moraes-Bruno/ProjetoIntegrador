<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <link rel="stylesheet" href="../css/perfilAluno.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/20764abc40.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <a href="PerfilAluno.php" class="logo">Fatec<span> Vagas</span></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navlist">
            <li><a href="vagas.php">Vagas</a></li>
            <li><a href="#">Minhas vagas</a></li>
        </ul>

        <div class="navDireita">
            <a href="perfilAluno.php"><img src="../imgs/Paula_redonda_icone.png" class="imgPerfil"alt="Imagem perfil"></a>
               <p>Paula Raquel lima</p>
        </div>
    </header>   
        <main>

            <picture id="celular">
                <img src="../imgs/Paula_redonda_icone.png" alt="foto de perfil">
            </picture>

            <form action="post" class="formulario">

                <label for="ra">Ra</label>
                <input type="text" name="ra">

                <label for="nome">Nome</label>
                <input type="text" name="nome">

                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome">

                <label for="nascimento">Data de nascimento</label>
                <input type="text" name="nascimento">

                <label for="genero">Gênero</label>
                <input type="text" name="genero">

                <label for="curso">Curso</label>
                <input type="text" name="curso">

                <label for="periodoCurso">Perido do Curso</label>
                <input type="text" name="periodoCurso">

                <label for="cidade">Cidade</label>
                <input type="text" name="cidade">

                <label for="competencias">Competencias</label>
                <input type="text" name="competencias">

                <label for="idioma">Idiomas</label>
                <input type="text" name="idioma">

                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone">

                <label for="modadalidade">Modalidade de preferência</label>
                <input type="text" name="modalidade">

                <label for="interesse">Área de interesse</label>
                <input type="text" name="interesse">

                <label for="senha">Senha</label>
                <input type="password" name="senha">
            </form>

            <div class="direita">

                <picture>
                    <img src="../imgs/Paula_redonda_icone.png" alt="foto de perfil">
                </picture>

                <p id="bio">Biografia</p>
                <textarea class="campoDireita"name="Biografia" cols="30" rows="10"></textarea>

                <p>Resumo de experiencias</p>
                <textarea class="campoDireita"name="experiencia" cols="30" rows="10"></textarea>

                <p>Links</p>
                <textarea class="campoDireita"name="links" cols="30" rows="10"></textarea>
            </div>
            
            <div class="botoes">
                <input id="cadastrar" type="button" value="Salvar">
            </div>

        </main>
        <footer class="footer">
        <a href="https://www.fatecitapira.edu.br/">Fatec Itapira</a>
        <div class="imgs-footer">

            <i class="fa-brands fa-square-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
        </div>
    </footer>
    <script type="text/javascript" src="../js/Nav.js"></script>
</body>
</html>