<?php include "../includes/cabecalho.php"; 
include "../includes/conexao.php";

$sqlBusca = "SELECT * FROM tb_livros";

$listaLivros = mysqli_query($conexao, $sqlBusca);

?>

<div id="MeuCarousel" class="carousel carousel-dark slide mt-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../img/home11.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="../img/home12.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="../img/home13.png" class="d-block w-100">
        </div>
    </div>
    <!-- Botões do banner rotativo -->
    <button class="carousel-control-prev" type="button" data-bs-target="#MeuCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#MeuCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon " aria-hidden="true"></span>
        <span class="visually-hidden carousel-dark"></span>
    </button>
</div>

<div class="container py-5">
    <!--Valores-->
    <article>
        <div class="row mt-5">
            <div class="col-sm-1">
               <i class="bi bi-bookmark-check-fill fs-3 bg-success text-white rounded-circle"></i>
            </div>
            <div class="col-sm-3">
                <h4>Valores</h4>
                <p>Crescer e evoluir juntos;<br>
                Responsabilidade;<br>
                Diversidade.</p>
            </div>
            <div class="col-sm-1">
                <i class="bi bi-bookmark-check-fill fs-3 bg-success text-white rounded-circle"></i>
            </div>
            <div class="col-sm-3">
                <h4>Livros</h4>
                <p>Nossos livros são devidamente conservados, para que chegue até você da melhor forma possível.</p>
            </div>
            <div class="col-sm-1">
                <i class="bi bi-bookmark-check-fill fs-3 bg-success text-white rounded-circle"></i>
            </div>
            <div class="col-sm-3">
                <h4>Segurança</h4>
                <p>Esperamos em troca de você leitor, manter esses livros a salvos.</p>
            </div>
        </div>
    </article>

    <article class="mt-5 row">
        <div class="text-center">
            <h2>Esta curioso para saber quais livros temos?</h2>
        </div>
        <div class="col-md-4">
            <div id="carouselExampleSlidesOnly" class="carousel slide mt-4" data-bs-ride="carousel">
                <div class="carousel-inner col-md-2">
                    <div class="carousel-item active">
                        <img src="../img/a-rainha-vermelha.jpeg" class="d-block " alt="Foto do livro A rainha vermelha" style="width: 250px;">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/amor-sob-encomenda.jpeg" class="d-block" alt="Foto do livro Amor sob encomenda" style="width: 250px;">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/ladrao-de-raios.jpeg" class="d-block" alt="Foto do livro Percy jackson e o ladrão de raios" style="width: 250px;">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/um-marido-de-faz-de-conta.jpeg" class="d-block" alt="Foto do livro Um marido de faz de conta" style="width: 250px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 d-flex align-content-center flex-wrap">
            <p class="fs-4">Não passe vontade acesse a nossa página do acervo e fique por dentro de todos os títulos que temos disponivéis em nossas três unidades.</p>
            <div class="text-center">
                <a href="acervo.php" class="btn btn-success">Acesse aqui</a>
            </div>
        </div>
    </article>
    <!-- Notícias de capa 
    <article class="mt-5">
        <h2 class="text-center">Notícias</h2>
         Primeira linha 
        <div class="row mt-3">
            <div class="row col-md-6 g-0 position-relative">
                <div class="col-md-6 p-md-4">
                    <img src="../img/fotografia.jpg" class="w-100" class="Fotografia">
                </div>
                <div class="col-md-6 p-4 ps-md-0">
                    <h5 class="mt-0">Lorem ipsum dolor sit amet consectetur</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem est harum asperiores nesciunt.</p>
                    <a href="#" class="stretched-link">Saiba mais</a>
                </div>
            </div>
            <div class="row col-md-6 g-0 position-relative">
                <div class="col-md-6 p-md-4">
                    <img src="../img/fotografia.jpg" class="w-100" class="Fotografia">
                </div>
                <div class="col-md-6 p-4 ps-md-0">
                    <h5 class="mt-0">Lorem ipsum dolor sit amet consectetur</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem est harum asperiores nesciunt.</p>
                    <a href="#" class="stretched-link">Saiba mais</a>
                </div>
            </div>
        </div>
    </article>

    Segunda linha 
    <article class="row mt-3">
        <div class="row col-md-6 g-0 position-relative">
            <div class="col-md-6 p-md-4">
                <img src="../img/fotografia.jpg" class="w-100" class="Fotografia">
            </div>
            <div class="col-md-6 p-4 ps-md-0">
                <h5 class="mt-0">Lorem ipsum dolor sit amet consectetur</h5>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem est harum asperiores nesciunt.</p>
                <a href="#" class="stretched-link">Saiba mais</a>
            </div>
        </div>
        <div class="row col-md-6 g-0 position-relative">
            <div class="col-md-6 p-md-4">
                <img src="../img/fotografia.jpg" class="w-100" class="Fotografia">
            </div>
            <div class="col-md-6 p-4 ps-md-0">
                <h5 class="mt-0">Lorem ipsum dolor sit amet consectetur</h5>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem est harum asperiores nesciunt.</p>
                <a href="#" class="stretched-link">Saiba mais</a>
            </div>
        </div>
    </article>

    Post do blog da página inicial
    <article class="mt-5">
        <h2 class="text-center">Post do Blog</h2>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa neque placeat est dolorum laudantium deleniti at libero recusandae!</p>
        <div class="row mt-5 ">
            <div class="col position-relative">
                <div class="card">
                    <img src="../img/um-marido-de-faz-de-conta.jpeg" class="card-img-top" alt="Livro Um marido de faz de conta">
                    <div class="card-body">
                        <h5 class="card-title">Um marido de faz conta</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col position-relative">
                <div class="card">
                    <img src="../img/a-rainha-vermelha.jpeg" class="card-img-top" alt="Livro Um marido de faz de conta">
                    <div class="card-body">
                        <h5 class="card-title">Um marido de faz conta</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col position-relative">
                <div class="card">
                    <img src="../img/amor-sob-encomenda.jpeg" class="card-img-top" alt="Livro Um marido de faz de conta">
                    <div class="card-body">
                        <h5 class="card-title">Um marido de faz conta</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col position-relative">
                <div class="card">
                    <img src="../img/ladrao-de-raios.jpeg" class="card-img-top" alt="Livro Um marido de faz de conta">
                    <div class="card-body">
                        <h5 class="card-title">Um marido de faz conta</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </article> 
-->
</div>   

<?php include "../includes/rodape.php"; ?>