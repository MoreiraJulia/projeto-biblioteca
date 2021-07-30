<?php include "../includes/cabecalho.php"; ?>
<?php include "../includes/conexao.php"; ?>


<aside class="container">
            <div class="row g-0 acervo position-relative mt-4">
                <div class="mt-2 p-md-4 p-4">
                    <h2>Acervo</h2>
                    <p><strong>Como funciona o catálogo de acervo:</strong><br>
                    Logo abaixo é possível fazer uma busca pelo título do livro desejo das três bibliotecas.<br>
                    De imediato lhe será fornecida de qual biblioteca o livro se encontra e se está ou não disponível para reserva.</p>
                    <p><strong>Reserva:</strong><br>
                    É possível fazer a reserva do livro desejado aqui pelo site mesmo, basta fazer o ‘login’, selecionar o livro escolhido e escolher uma data para retirada, também é possível desfazer a reserva se assim desejar.<br>
                    Caso ainda não tenha cadastro, basta se dirigir a mais próxima a você e solicitar o cadastramento.</p>
                </div>
            </div>

            <h3 class="mt-5">Vamos achar o livro desejado</h3>
            <div class="row g-0 position-relative mt-4 justify-content-center">
                <form method="POST" id="form-pesquisa" action="" class="d-flex col-12">
                    <input class="form-control me-2" type="text" placeholder="Digite aqui" name="pesquisa" id="pesquisa">
                    <!-- <button class="btn btn-outline-danger" type="submit">Search</button> -->
                </form>
                
               
                    <div class="row mt-3">
                        <div class="row col-md-12 position-relzative resposta">
                          
                        </div> 
                    </div>
            </div>

        </aside>



<?php include "../includes/rodape.php"; ?>