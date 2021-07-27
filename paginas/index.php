<?php include "../includes/cabecalho.php"; ?>

<div id="MeuCarousel" class="carousel carousel-dark slide mt-4" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/home4.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="../img/home5.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="../img/home6.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="../img/home7.jpg" class="d-block w-100">
                </div>
            </div>

            <!--Botões do banner rotativo-->
            <button class="carousel-control-prev" type="button" data-bs-target="#MeuCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#MeuCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon " aria-hidden="true"></span>
                <span class="visually-hidden carousel-dark"></span>
            </button>
        </div>

        <div class="container">
            <!--Valores-->
            <article class="mt-5">
                <h2 class="text-center">Título</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem dolor soluta vero accusantium
                    consectetur accusamus eligendi veritatis iusto vel repellendus perferendis error sequi, quae quidem
                    doloribus nemo corporis debitis modi.</p>
                <div class="row mt-5">
                    <div class="col-sm-1">
                        <i class="bi bi-book fs-3 bg-dark text-white rounded-circle"></i>
                    </div>
                    <div class="col-sm-3">
                        <h4>Agenda</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="col-sm-1">
                        <i class="bi bi-book fs-3 bg-dark text-white rounded-circle"></i>
                    </div>
                    <div class="col-sm-3">
                        <h4>Valores</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="col-sm-1">
                        <i class=" bi bi-book fs-3 bg-dark text-white rounded-circle"></i>
                    </div>
                    <div class="col-sm-3">
                        <h4>Segurança</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </article>

            <!--Notícias de capa-->
            <article class="mt-5">
                <h2 class="text-center">Notícias</h2>
                <!--Primeira linha-->
                <div class="row mt-3">
                    <div class="row col-md-6 g-0 position-relative">
                        <div class="col-md-6 p-md-4">
                            <img src="../img/fotografia.jpg" class="w-100" class="Fotografia">
                        </div>
                        <div class="col-md-6 p-4 ps-md-0">
                            <h5 class="mt-0">Lorem ipsum dolor sit amet consectetur</h5>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem est harum asperiores
                                nesciunt.
                            </p>
                            <a href="#" class="stretched-link">Saiba mais</a>
                        </div>
                    </div>

                    <div class="row col-md-6 g-0 position-relative">
                        <div class="col-md-6 p-md-4">
                            <img src="../img/fotografia.jpg" class="w-100" class="Fotografia">
                        </div>
                        <div class="col-md-6 p-4 ps-md-0">
                            <h5 class="mt-0">Lorem ipsum dolor sit amet consectetur</h5>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem est harum asperiores
                                nesciunt.
                            </p>
                            <a href="#" class="stretched-link">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </article>


            <!--Segunda linha-->
            <article class="row mt-3">
                <div class="row col-md-6 g-0 position-relative">
                    <div class="col-md-6 p-md-4">
                        <img src="../img/fotografia.jpg" class="w-100" class="Fotografia">
                    </div>
                    <div class="col-md-6 p-4 ps-md-0">
                        <h5 class="mt-0">Lorem ipsum dolor sit amet consectetur</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem est harum asperiores
                            nesciunt.
                        </p>
                        <a href="#" class="stretched-link">Saiba mais</a>
                    </div>
                </div>

                <div class="row col-md-6 g-0 position-relative">
                    <div class="col-md-6 p-md-4">
                        <img src="../img/fotografia.jpg" class="w-100" class="Fotografia">
                    </div>
                    <div class="col-md-6 p-4 ps-md-0">
                        <h5 class="mt-0">Lorem ipsum dolor sit amet consectetur</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem est harum asperiores
                            nesciunt.
                        </p>
                        <a href="#" class="stretched-link">Saiba mais</a>
                    </div>
                </div>
            </article>

            <!--Post do blog da página inicial-->
            <article class="mt-5">
                <h2 class="text-center">Post do Blog</h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa neque placeat est
                    dolorum laudantium deleniti at libero recusandae! </p>
                <div class="row mt-5 ">
                    <div class="col position-relative">
                        <div class="card">
                            <img src="../img/um-marido-de-faz-de-conta.jpeg" class="card-img-top"
                                alt="Livro Um marido de faz de conta">
                            <div class="card-body">
                                <h5 class="card-title">Um marido de faz conta</h5>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col position-relative">
                        <div class="card">
                            <img src="../img/a-rainha-vermelha.jpeg" class="card-img-top"
                                alt="Livro Um marido de faz de conta">
                            <div class="card-body">
                                <h5 class="card-title">Um marido de faz conta</h5>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col position-relative">
                        <div class="card">
                            <img src="../img/amor-sob-encomenda.jpeg" class="card-img-top"
                                alt="Livro Um marido de faz de conta">
                            <div class="card-body">
                                <h5 class="card-title">Um marido de faz conta</h5>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col position-relative">
                        <div class="card">
                            <img src="../img/ladrao-de-raios.jpeg" class="card-img-top"
                                alt="Livro Um marido de faz de conta">
                            <div class="card-body">
                                <h5 class="card-title">Um marido de faz conta</h5>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
</div>   
<?php include "../includes/rodape.php"; ?>