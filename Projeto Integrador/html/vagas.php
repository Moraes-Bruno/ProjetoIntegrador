<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vagas</title>
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/vagas.css">
    <script src="https://kit.fontawesome.com/20764abc40.js" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <a href="#" class="logo">Fatec<span> Vagas</span></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navlist">
            <li><a href="vagas.php">vagas</a></li>
            <li><a href="#">Minhas vagas</a></li>
        </ul>

        <div class="navDireita">
            <img class="imgPerfil" src="../imgs/Paula_redonda_icone.png" alt="imagem perfil">
            <p>Paula raquel lima</p>
        </div>
    </header>


    <section class="busca">
        <h1 class="titulo-vagas">Vagas para Campinas e região!</h1>
        <p>Quer ser contratado como freelancer (PJ), estagiário ou CLT?</p>
        <p>Então você está no lugar certo!</p>

        <div class="barra-busca">
            <form>
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Digite um cargo, cidade ou estado">
                <button type="submit">Procurar</button>
            </form>
        </div>
    </section>


    <section class="vagas">


        <aside class="filtros">
            <form class="filtros-form">
                <p>Modalidade de trabalho</p>
                <div class="botoes">
                    <input type="checkbox">
                    <label for="">Remoto</label>
                    <input type="checkbox">
                    <label for="">Presencial</label>
                </div>

                <p>Regime de trabalho</p>
                <div class="botoes">
                    <input type="checkbox">
                    <label for="">CLT</label>
                    <input type="checkbox">
                    <label for="">PJ</label>
                </div>

                <p>Vaga para PCD</p>
                <div class="botoes">
                    <input type="checkbox">
                    <label for="">Sim</label>
                    <input type="checkbox">
                    <label for="">Não</label>
                </div>


                <label id="local-trabalho" for="filtro-cidade">Local de trabalho</label>
                <select class="botoes option-cidade" name="filtro-cidade">
                    <option value="">Selecione a cidade</option>
                    <option value="1">Itapira</option>
                    <option value="2">São Paulo</option>
                    <option value="3">Campinas</option>
                    <option value="4">Jacutinga</option>
                </select>


                <button id="botao" type="submit">Filtrar</button>
            </form>
        </aside>



        <main class="detalhe-vagas">
            <div class="detalhe-vaga-mini">
                <h3 class="nome-vaga">Promotor de Vendas</h3>
                <h3 class="empresa">Danone</h3>

                <p class="descricao">Área: Vendas Local de Trabalho: Diversas localidades em todo o Brasil Escala de
                    Trabalho: 6X1
                    Principais responsabilidades: - Negociar e executar, nos clientes, a implantação do conteúdo do
                    programa de
                    exposição de produtos - Atingir as metas de vendas individuais estabelecidas pela Danone.</p>


                <div class="loctime-flex">
                    <div class="location">
                        <i class="fa-solid fa-location-dot"></i>
                        <p class="localizacao">Campinas</p>
                    </div>

                    <div class="time">
                        <i class="fa-regular fa-clock"></i>
                        <p>23/23/2323</p>
                    </div>


                </div>
                <a href="#" id="detalhes">Ver detalhes</a>
            </div>


            <?php

            include("pdo.php");


            $sql = "SELECT nome_vaga, nome_empresa, descricao, data_abertura, cidade_vaga  FROM vagas INNER JOIN empresas ON vagas.empresa_id = empresas.empresa_id";

            $res = $conn->query($sql);

            $qtd = $res->num_rows;

            if ($qtd > 0) {
                while ($row = $res->fetch_assoc()) {
                    print "<div class='detalhe-vaga-mini'>";
                    print "<h3 class='nome-vaga'>" . $row['nome_vaga'] . "</h3>";
                    print "<h3 class='empresa'>" . $row['nome_empresa'] . "</h3>";
                    print "<p class='descricao'>" . $row['descricao'] . "</p>";
                    print "<div class='loctime-flex'>";
                    print "<div class='location'>";
                    print "<i class='fa-solid fa-location-dot'></i>";
                    print "<p class='localizacao'>" . $row['cidade_vaga'] . "</p>";
                    print "</div>";
                    print "<div class='time'>";
                    print "<i class='fa-regular fa-clock'></i>";
                    print "<p>" . $row['data_abertura'] . "</p>";
                    print "</div>";
                    print "</div>";
                    print "<a href='#' id='detalhes'>Ver detalhes</a>";
                    print "</div>";
                }
            } else {
                print "<script>alert('Não há vagas cadastradas!');</script>";
            }

            ?>



        </main>


    </section>
    <footer class="footer">
        <a href="https://www.fatecitapira.edu.br/">Fatec Itapira</a>
        <div class="imgs-footer">

            <i class="fa-brands fa-square-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
        </div>
    </footer>
</body>

</html>