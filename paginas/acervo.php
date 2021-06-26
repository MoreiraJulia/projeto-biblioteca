<?php include "../includes/cabecalho.php"; ?>
<?php include "../includes/conexao.php"; ?>


<aside class="container">
            <div class="row g-0 acervo position-relative mt-4">
                <div class="mt-2 p-md-4 p-4">
                    <h2>Acervo</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum voluptatum asperiores, iste reprehenderit cumque ipsum maiores at esse ipsam tenetur impedit fuga eveniet? Illo, id. Blanditiis unde quas quis inventore? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur doloribus quasi corrupti, dignissimos, alias rerum deserunt dolores maiores sed ad illum ex nihil ipsam, quo quas quibusdam dolore laboriosam dolorem?
                    </p>
                </div>
            </div>

            <h3 class="mt-5">Vamos achar o livro desejado</h3>
            <div class="row g-0 position-relative mt-4 justify-content-center">
                <form method="POST" id="form-pesquisa" action="" class="d-flex col-10">
                    <input class="form-control me-2" type="text" placeholder="Digite aqui" name="pesquisa" id="pesquisa">
                    <!-- <button class="btn btn-outline-danger" type="submit">Search</button> -->
                </form>
                
               
                    <div class="row mt-3">
                        <div class="row col-md-12 position-relative resposta">
                          
                        </div> 
                    </div>
            </div>

        </aside>



<?php include "../includes/rodape.php"; ?>