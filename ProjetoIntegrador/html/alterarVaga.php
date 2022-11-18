<?php

require '../php/verificaJuridica.php';

if(isset($_SESSION['idempresa']) && !empty($_SESSION['idempresa'])){



$sql = "SELECT *  FROM vagas INNER JOIN empresas ON vagas.empresa_id = empresas.IDempresa WHERE IDvaga = :idvaga";


$res = $conn->prepare($sql);
$res->bindParam(":idvaga", $_GET["id"]);
$res->execute();

//$qtd = $res->num_rows;

$res = $res->fetch();

}


else{
    header("Location: cadastrarVaga.php");
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Vaga</title>
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

    <p id="mv">Alterar Vaga</p>

        <main>


            <form action="../php/alteraVaga.php?id=<?php echo $res['IDvaga']?>" class="form" method="POST">

                <div class="coluna">
                    <div class="esquerda">
                        <div class="column">
                            <label for="nome">Nome da Vaga</label>
                            <input type="text" name="nome" id="nome" required value="<?php echo $res['nome_vaga'];?>">
                            <label for="nivel">Nivel da vaga</label>
                            <input type="text" name="nivel" id="nivel" required value="<?php echo $res['nivel_vaga'];?>">
                            <label for="modelo">Modelo de contratação</label>
                            <input type="text" name="modelo" id="modelo" required value="<?php echo $res['modelo_contrataco'];?>">
                            <label for="abertura">Data de abertura</label>
                            <input type="date" name="abertura" id="abertura" required value="<?php echo $res['data_abertura'];?>">
                            <label for="fechamento">Data de fechamento</label>
                            <input type="date" name="fechemento" id="fechemento" required value="<?php echo $res['data_fechamento'];?>">
                            <label for="modalidade">Modalidade de trabalho</label>
                            <input type="text" name="modalidade" id="modalidade" required value="<?php echo $res['modalidade_de_trabalho'];?>">
                            <label for="salario">Salário</label>
                            <input type="text" name="salario" id="salario" required value="<?php echo $res['salario'];?>">
                            <label for="cidade">Cidade da vaga</label>
                            <input type="text" name="cidade" id="cidade" required value="<?php echo $res['cidade_vaga'];?>" >
                        </div>
                    </div>
                    <div class="direita">
                        <div class="column">
                            <p id="bio">Descrição</p>
                            <textarea required class="campoDireita" name="descricao" id="descricao" cols="30" rows="10" required="required" ><?php echo $res['descricao'];?></textarea>
                            <p>Requisitos</p>
                            <textarea required class="campoDireita"name="experiencia" id="experiencia" cols="30" rows="10" required="required"><?php echo $res['experiencia'];?></textarea>
                            <p>Benefícios</p>
                            <textarea required class="campoDireita"name="links" id="links" cols="30" rows="10" required="required"><?php echo $res['links'];?></textarea>
                            <div class="botoes"><input id="cadastrar" type="submit"  value="Alterar"></div>       
                        </div>
                    </div>
                </div>
               
            </form>

        </main>