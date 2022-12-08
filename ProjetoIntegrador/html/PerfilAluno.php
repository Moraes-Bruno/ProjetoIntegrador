<?php

require '../php/verifica.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])):?>
<?php

   $id = $_SESSION['idUser'];


    /*Recupera as informações da tabela Alunos*/
    $sql =" SELECT *  FROM alunos join cursos on alunos.id_curso = cursos.IDcurso where IDaluno = $id";
    $stmt = $conn->query($sql);
    $stmt = $stmt->fetch();
   
    /*Recupera as informações da tabela Enderecos*/
    $endereco = " SELECT * FROM endereco_alunos join enderecos on endereco_alunos.endereco_id=enderecos.IDendereco join bairros on enderecos.bairro_id=bairros.IDbairro join cidades on bairros.cidade_id=cidades.IDcidade where Aluno_id=$id";
    $stmt2 = $conn->query($endereco);
    $stmt2 = $stmt2->fetch();
     

    /*Recupera as informações da tabela Links*/
    $links = " SELECT * from links where id_aluno = $id ";
    $stmt3 = $conn->query($links);
    $stmt3 = $stmt3->fetch();

    /*Recupera as informações da tabela idiomas*/
    $idiomas = " SELECT * FROM idiomas where aluno_id=$id";
    $stmt4 = $conn->query($idiomas);
    $stmt4 = $stmt4->fetch();

     /*Recupera as informações da tabela telefones*/
     $tel = " SELECT * FROM telefone_alunos join telefones on telefone_alunos.id_telefone=telefones.IDtelefone where idAluno=$id";
     $stmt5 = $conn->query($tel);
     $stmt5 = $stmt5->fetch();


 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/perfilAluno.css">
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

        <main>

            <picture id="celular">
                <img src="../imgs/Paula_redonda_icone.png" alt="foto de perfil">
            </picture>

            <form action="../php/alteraPerfilAluno.php" method="POST" class="formulario">
                    
                <div>
                    <label for="ra">Ra</label>
                    <input type="text"  name="ra" readonly value="<?php echo $stmt['RA']?>">

                    <label for="nome">Nome</label>
                    <input type="text" name="nome" readonly value="<?php echo $stmt['nome']?>">

                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" name="sobrenome" readonly value="<?php echo $stmt['sobrenome']?>">

                    <label for="nascimento">Data de nascimento</label>
                    <input type="text" name="nascimento" readonly value="<?php echo $stmt['data_nascimento']?>">

                    <label for="genero">Gênero</label>
                    <input type="text" name="genero" value="<?php echo $stmt['genero']?>">

                    <label for="curso">Curso</label>
                    <input type="text" readonly name="curso"  value="<?php echo $stmt['nome_curso']?>">

                    <label for="periodoCurso">Perido do Curso</label>
                    <input type="text" name="periodoCurso" readonly value="<?php echo $stmt['periodo']?>">

                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" value="<?php echo $stmt2['nome']?>">

                    <label for="competencias">Competencias</label>
                    <input type="text" name="competencias" value="<?php echo $stmt['competencias']?>">

                    <label for="idioma">Idiomas</label>
                    <input type="text" name="idioma" value="<?php echo $stmt4['idioma']?>">

                    <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" value="<?php echo $stmt5['telefone']?>">

                    <label for="modadalidade">Modalidade de preferência</label>
                    <input type="text" name="modalidade" value="<?php echo $stmt['modalidade_preferencia']?>">

                    <label for="interesse">Área de interesse</label>
                    <input type="text" name="interesse" value="<?php echo $stmt['regiao_interesse']?>">

                    <div class="links">
                        <a href="recuperarSenha.php">Alterar senha</a>
                    </div>
                </div class="esquerda">

            
                <div>
    
                <div class="direita">
    
                    <picture>
                        <img src="../imgs/Paula_redonda_icone.png" alt="foto de perfil">
                    </picture>
    
                    <p id="bio">Biografia</p>
                    <textarea class="campoDireita"name="Biografia" cols="30" rows="10"><?php echo $stmt['biografia']?> </textarea>
    
                    <p>Resumo de experiencias</p>
                    <textarea class="campoDireita"name="experiencia" cols="30" rows="10"><?php echo $stmt['resumo_experiencia']?></textarea>
    
                    <p>Links</p>
                    <textarea class="campoDireita"name="links" cols="30" rows="10"><?php echo $stmt3['link']?></textarea>
                </div>
                    <div class="botoes">
                        <input id="cadastrar" type="submit" value="Salvar">
                    </div>
            </form>
                   
        </main>
        
        <script src="https://unpkg.com/scrollreveal"></script>

<!-- Link JAva Script -->
<script type="text/javascript" src="../js/Nav.js"></script>
</body>
</html>

<?php else: header("Location: ../html/index.html"); endif;?>