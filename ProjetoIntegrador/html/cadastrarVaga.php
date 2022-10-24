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
    <header>
        <a href="home_aluno.php" class="logo">Fatec<span> Vagas</span></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navlist">
            <li><a href="home_aluno.php">Home</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="cadastrarVaga.php">Home</a></li>
            <li><a href="vagas.php">Vagas</a></li>
        </ul>

        <div class="navDireita">
            <a href="PerfilAluno.php"><img src="../imgs/Paula_redonda_icone.png" class="imgPerfil"alt="Imagem perfil"></a>
            <p>Nome empresa</p>
        </div>
    </header>

        <main>


            <form action="post" class="formulario">

                <label for="nome">Nome da Vaga</label>
                <input type="text" name="nome">

                <label for="nivel">Nivel da vaga</label>
                <input type="text" name="nivel">

                <label for="modelo">Modelo de contratação</label>
                <input type="text" name="modelo">

                <label for="abertura">Data de abertura</label>
                <input type="date" name="abertura">

                <label for="fechamento">Data de fechamento</label>
                <input type="date" name="fechemento">

                <label for="modalidade">Modalidade de trabalho</label>
                <input type="text" name="modalidade">

                <label for="salario">Salário</label>
                <input type="text" name="salario">

                <label for="cidade">Cidade da vaga</label>
                <input type="text" name="cidade">
            </form>

            <div class="direita">

                <p id="bio">Descrição</p>
                <textarea class="campoDireita"name="Biografia" cols="30" rows="10"></textarea>

                <p>Requisitos</p>
                <textarea class="campoDireita"name="experiencia" cols="30" rows="10"></textarea>

                <p>Benefícios</p>
                <textarea class="campoDireita"name="links" cols="30" rows="10"></textarea>
            </div>
            
            <div class="botoes">
                <input id="cancelar" type="button" value="Cancelar">
                <input id="cadastrar" type="button" value="Salvar">
            </div>

        </main>
        
        <script src="https://unpkg.com/scrollreveal"></script>

        <p id="mv">Minhas Vagas</p>

        <div class="minhas_vagas">
            <div class="vaga">
                <h2>Nome Vaga</h2>
                <p>Descrição da vaga </p>
                <div class="data"><img src="../imgs/tempo.png" alt="relogio"><p>dd/mm/yyyy</p></div>
                <p id="cidade"> <img src="../imgs/pointer.png" alt="pointer"> Cidade</p>
                <a href="#">Alterar Vaga</a>
        </div>

        <div class="minhas_vagas">
            <div class="vaga">
                <h2>Nome Vaga</h2>
                <p>Descrição da vaga </p>
                <div class="data"><img src="../imgs/tempo.png" alt="relogio"><p>dd/mm/yyyy</p></div>
                <p id="cidade"> <img src="../imgs/pointer.png" alt="pointer"> Cidade</p>
                <a href="#">Alterar Vaga</a>

            </div>

            <div class="minhas_vagas">
            <div class="vaga">
                <h2>Nome Vaga</h2>
                <p>Descrição da vaga </p>
                <div class="data"><img src="../imgs/tempo.png" alt="relogio"><p>dd/mm/yyyy</p></div>
                <p id="cidade"> <img src="../imgs/pointer.png" alt="pointer"> Cidade</p>
                <a href="#">Alterar Vaga</a>

            </div>

        </div>













<!-- Link JAva Script -->
<script type="text/javascript" src="../js/Nav.js"></script>
</body>
</html>