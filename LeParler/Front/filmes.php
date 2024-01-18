<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LeParler - Filmes</title>
    <link rel="icon" href="../assets/images-slide/logo.png">
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./script.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <nav class="navbar">
        <img src="../assets/images-slide/logo.png" alt="" />
        <div class="buttons-nav">
            <a class="button-nav" href="./home.html">Home</a>
            <a class="button-nav" href="./adm.html">Área Administrativa</a>
            <button class="button-nav" id="openOptions">Críticas</button>
            <div class="options-container" id="optionsContainer">
                <a href="./filmes.php" class="option">Filmes</a>
                <a href="./series.html" class="option">Séries</a>
                <a href="./jogos.html" class="option">Jogos</a>
                <a href="./musicas.html" class="option">Músicas</a>
            </div>
        </div>
    </nav>
</head>

<body>

    <nav class="navbar">
        <!-- ... (seu menu de navegação) ... -->
    </nav>

    <!-- Submódulo Críticas -->
    <section id="criticas" class="submodulo">
        <h2 class="title-home">Críticas</h2>

        <!-- div que agrupa os cards -->
        <div class="posts">

            <?php

            include "../Back/conexao.php";
            $sql = "SELECT * FROM `resenha`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {

                $resenha_id = $array['resenha_id'];
                $data = $array['data'];
                $texto = $array['texto'];
                $titulo = $array['titulo'];
                $critica = $array['critica'];
                $imagem = $array['imagem'];
                $pessoa = $array['pessoa'];
                $categoria = $array['categoria'];
            }

            ?>

            <!-- 1º card -->
            <div class="card">
                <center>
                    <img class="img-card"
                        src="https://m.media-amazon.com/images/I/81arD48HpRL._AC_UF1000,1000_QL80_.jpg" alt="" />
                </center>
                <br />
                <h3 class="title-card"><?php echo $titulo?></h3>
                <br />
                <center>
                    <p class="text-card">
                        Este é um texto para fins de teste neste card.
                    </p>
                </center>
                <a href="javascript:void(0);" onclick="openModal()" class="button-critica">Abrir</a>

                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <div class="container">
                            <img src="../assets/images-posts/batman.jpeg" alt="Imagem da Crítica 1" />
                            <div class="card-content">
                                <h3>Crítica 1</h3>
                                <p>Breve descrição da crítica 1.</p>
                            </div>
                            <a class="button-modal-details" href="./criticas.html">Mais detalhes</a>
                            <button onclick="closeModal()" class="button-modal-close">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fim do 1º card -->

            <!-- 2º card -->
            <div class="card">
                <center>
                    <img class="img-card"
                        src="https://m.media-amazon.com/images/I/81arD48HpRL._AC_UF1000,1000_QL80_.jpg" alt="" />
                </center>
                <br />
                <h3 class="title-card">Título</h3>
                <br />
                <center>
                    <p class="text-card">
                        Este é um texto para fins de teste neste card.
                    </p>
                </center>
                <a href="javascript:void(0);" onclick="openModal()" class="button-critica">Abrir</a>

                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <div class="container">
                            <img src="../assets/images-posts/batman.jpeg" alt="Imagem da Crítica 1" />
                            <div class="card-content">
                                <h3>Crítica 1</h3>
                                <p>Breve descrição da crítica 1.</p>
                            </div>
                            <a class="button-modal-details" href="./criticas.html">Mais detalhes</a>
                            <button onclick="closeModal()" class="button-modal-close">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fim do 2º card -->

            <!-- 3º card -->
            <div class="card">
                <center>
                    <img class="img-card"
                        src="https://m.media-amazon.com/images/I/81arD48HpRL._AC_UF1000,1000_QL80_.jpg" alt="" />
                </center>
                <br />
                <h3 class="title-card">Título</h3>
                <br />
                <center>
                    <p class="text-card">
                        Este é um texto para fins de teste neste card.
                    </p>
                    <a href="javascript:void(0);" onclick="openModal()" class="button-critica">Abrir</a>

                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <div class="container">
                                <img src="../assets/images-posts/batman.jpeg" alt="Imagem da Crítica 1" />
                                <div class="card-content">
                                    <h3>Crítica 1</h3>
                                    <p>Breve descrição da crítica 1.</p>
                                </div>
                                <a class="button-modal-details" href="./criticas.html">Mais detalhes</a>
                                <button onclick="closeModal()" class="button-modal-close">Fechar</button>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- Fim do 3º card -->

            <!-- 4º card -->
            <div class="card">
                <center>
                    <img class="img-card"
                        src="https://m.media-amazon.com/images/I/81arD48HpRL._AC_UF1000,1000_QL80_.jpg" alt="" />
                </center>
                <br />
                <h3 class="title-card">Título</h3>
                <br />
                <center>
                    <p class="text-card">
                        Este é um texto para fins de teste neste card.
                    </p>
                </center>
                <a href="javascript:void(0);" onclick="openModal()" class="button-critica">Abrir</a>

                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <div class="container">
                            <img src="../assets/images-posts/batman.jpeg" alt="Imagem da Crítica 1" />
                            <div class="card-content">
                                <h3>Crítica 1</h3>
                                <p>Breve descrição da crítica 1.</p>
                            </div>
                            <a class="button-modal-details" href="./criticas.html">Mais detalhes</a>
                            <button onclick="closeModal()" class="button-modal-close">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fim do 4º card -->

            <!-- 5º card -->
            <div class="card">
                <center>
                    <img class="img-card"
                        src="https://m.media-amazon.com/images/I/81arD48HpRL._AC_UF1000,1000_QL80_.jpg" alt="" />
                </center>
                <br />
                <h3 class="title-card">Título</h3>
                <br />
                <center>
                    <p class="text-card">
                        Este é um texto para fins de teste neste card.
                    </p>
                </center>
                <a href="javascript:void(0);" onclick="openModal()" class="button-critica">Abrir</a>

                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <div class="container">
                            <img src="../assets/images-posts/batman.jpeg" alt="Imagem da Crítica 1" />
                            <div class="card-content">
                                <h3>Crítica 1</h3>
                                <p>Breve descrição da crítica 1.</p>
                            </div>
                            <a class="button-modal-details" href="./criticas.html">Mais detalhes</a>
                            <button onclick="closeModal()" class="button-modal-close">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fim do 5º card -->

            <!-- 6º card -->
            <div class="card">
                <center>
                    <img class="img-card"
                        src="https://m.media-amazon.com/images/I/81arD48HpRL._AC_UF1000,1000_QL80_.jpg" alt="" />
                </center>
                <br />
                <h3 class="title-card">Título</h3>
                <br />
                <center>
                    <p class="text-card">
                        Este é um texto para fins de teste neste card.
                    </p>
                    <a href="javascript:void(0);" onclick="openModal()" class="button-critica">Abrir</a>

                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <div class="container">
                                <img src="../assets/images-posts/batman.jpeg" alt="Imagem da Crítica 1" />
                                <div class="card-content">
                                    <h3>Crítica 1</h3>
                                    <p>Breve descrição da crítica 1.</p>
                                </div>
                                <a class="button-modal-details" href="./criticas.html">Mais detalhes</a>
                                <button onclick="closeModal()" class="button-modal-close">Fechar</button>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- Fim do 6º card -->
        </div>
        <!-- Fim da div que agrupa os cards -->

        </div>
    </section>

    <!-- Submódulo Notícias -->
    <section id="noticias" class="submodulo">
        <h2 class="title-home">Notícias</h2>

        <!-- div que agrupa os cards de notícias -->
        <div class="posts">
            <!-- 1º card de notícia -->
            <div class="card">
                <!-- ... (conteúdo do card) ... -->
            </div>
            <!-- Fim do 1º card de notícia -->

            <!-- Adicione mais cards de notícias conforme necessário -->

        </div>
    </section>

    <!-- Submódulo Oscar -->
    <section id="oscar" class="submodulo">
        <h2 class="title-home">Oscar</h2>

        <!-- div que agrupa os cards relacionados ao Oscar -->
        <div class="posts">
            <!-- 1º card relacionado ao Oscar -->
            <div class="card">
                <!-- ... (conteúdo do card) ... -->
            </div>
            <!-- Fim do 1º card relacionado ao Oscar -->

            <!-- Adicione mais cards relacionados ao Oscar conforme necessário -->

        </div>
    </section>

    <footer>
        <!-- Classe footer para agrupar e alinhar os elementos dentro dela -->
        <div class="footer">
            <!-- Classe para agrupar uma categoria e suas opções -->
            <div class="sociais">
                <h4 class="title-footer">Sociais</h4>
                <div class="redes">
                    <a href="https://www.instagram.com/leparler.ag/?igshid=OGQ5ZDc2ODk2ZA%3D%3D">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                            viewBox="0,0,256,256" style="fill: #000000">
                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(8.53333,8.53333)">
                                    <path
                                        d="M9.99805,3c-3.859,0 -6.99805,3.14195 -6.99805,7.00195v10c0,3.859 3.14195,6.99805 7.00195,6.99805h10c3.859,0 6.99805,-3.14195 6.99805,-7.00195v-10c0,-3.859 -3.14195,-6.99805 -7.00195,-6.99805zM22,7c0.552,0 1,0.448 1,1c0,0.552 -0.448,1 -1,1c-0.552,0 -1,-0.448 -1,-1c0,-0.552 0.448,-1 1,-1zM15,9c3.309,0 6,2.691 6,6c0,3.309 -2.691,6 -6,6c-3.309,0 -6,-2.691 -6,-6c0,-3.309 2.691,-6 6,-6zM15,11c-2.20914,0 -4,1.79086 -4,4c0,2.20914 1.79086,4 4,4c2.20914,0 4,-1.79086 4,-4c0,-2.20914 -1.79086,-4 -4,-4z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26"
                            viewBox="0,0,256,256" style="fill:#000000;">
                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(9.84615,9.84615)">
                                    <path
                                        d="M13,0c-7.18,0 -13,5.82 -13,13c0,6.518 4.801,11.899 11.057,12.839v-9.394h-3.217v-3.417h3.217v-2.274c0,-3.765 1.834,-5.417 4.963,-5.417c1.498,0 2.291,0.111 2.666,0.162v2.983h-2.134c-1.328,0 -1.792,1.259 -1.792,2.679v1.868h3.893l-0.528,3.417h-3.365v9.422c6.345,-0.862 11.24,-6.287 11.24,-12.868c0,-7.18 -5.82,-13 -13,-13z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Classe para agrupar seção parceiro e suas opções -->
            <div class="sociais">
                <h4>Parceiros</h4>
                <div class="elementos-footer">
                    <a class="a" href="./parc.html">Parceiro 01</a>
                </div>
            </div>

            <!-- Classe para agrupar seção filmes e suas opções -->
            <div class="sociais">
                <h4>Filmes</h4>
                <div class="elementos-footer">
                    <a class="a" href="./filmes.html#criticas">Críticas</a>
                </div>
                <div class="elementos-footer">
                    <a class="a" href="./filmes.html#noticias">Notícias</a>
                </div>
                <div class="elementos-footer">
                    <a class="a" href="./filmes.html#oscar">Oscar</a>
                </div>
            </div>

            <!-- Classe para agrupar seção séries e suas opções -->
            <div class="sociais">
                <h4>Séries</h4>
                <div class="elementos-footer">
                    <a class="a" href="./series.html#criticas">Críticas</a>
                </div>
                <div class="elementos-footer">
                    <a class="a" href="./series.html#noticias">Notícias</a>
                </div>
            </div>

            <!-- Classe para agrupar seção músicas e suas opções -->
            <div class="sociais">
                <h4>Músicas</h4>
                <div class="elementos-footer">
                    <a class="a" href="./musicas.html#criticas">Críticas</a>
                </div>
                <div class="elementos-footer">
                    <a class="a" href="./musicas.html#noticias">Notícias</a>
                </div>
            </div>

            <!-- Classe para agrupar seção Jogos e suas opções -->
            <div class="sociais">
                <h4>Jogos</h4>
                <div class="elementos-footer">
                    <a class="a" href="./jogos.html#criticas">Críticas</a>
                </div>
                <div class="elementos-footer">
                    <a class="a" href="./jogos.html#noticias">Notícias<a>
                </div>
            </div>
        </div>

        <!-- Classe para acrescentar ao final da footer uma outra footer menor -->
        <div class="sub-footer">
            <p>Copyright 2024</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./script.js"></script>
</body>

</html>