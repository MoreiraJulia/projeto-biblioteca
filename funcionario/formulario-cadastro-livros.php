<?php include "../includes/cabecalho.php"; ?>
<?php
    if (!isset($_SESSION['nomeFuncionario'])){
        header('Location: funcionario-login.php?');
    }
?>

<div class="container">

    <h1 class="mt-5 py-5">Cadastro de livros</h1>

    <form name="cadastro-livros" method="post" action="livros-cadastrar.php" class="row mt-3" enctype="multipart/form-data">
        <p class="col-4">
            <label class="form-label" for="validationDefault01">ISBN-13:</label>
            <input name="isbn" class="form-control" min="14" maxlength="14" id="validationDefault01" required>
        </p>
        <p class="col-8">
            <label class="form-label" for="validationDefault02">Nome do livro:</label>
            <input name="nome_livro" class="form-control" id="validationDefault02" required>
        </p>
       
        <p class="col-6">
            <label class="form-label" for="validationDefault03">Gênero:</label>
            <input name="genero" class="form-control" id="validationDefault03" required>
        </p>
        <p class="col-6">
            <label class="form-label" for="validationDefault04">Série:</label>
            <input name="serie" class="form-control" id="validationDefault04" required>
        </p>
        <p class="col-3">
            <label class="form-label" for="validationDefault05">Classificação:</label>
            <input name="classificacao" class="form-control" type="number" id="validationDefault05" required>
        </p>
        <p class="col-5">
            <label class="form-label" for="validationDefault06">Editora:</label>
            <input name="editora" class="form-control" id="validationDefault06" required>
        </p>
        <p class="col-4">
            <label class="form-label" for="validationDefault07">Edição:</label>
            <input name="edicao" class="form-control" type="number" id="validationDefault07" required>
        </p>
        <p class="col-6">
            <label class="form-label" for="validationDefault08">Nome do autor:</label>
            <input name="nome_autor" class="form-control" id="validationDefault08" required>
        </p>
        <p class="col-6">
            <label class="form-label" for="validationDefault09">Biblioteca disponível:</label>
            <input name="endereco_biblioteca" class="form-control" id="validationDefault09" required>
        </p>
        <p class="col-6">
            <label class="form-label" for="validationDefault10">Foto:</label>
            <input type="file" name="arquivo" class="form-control" id="validationDefault10" required>
        </p> 
        <div class="col-6 mt-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Disponível" name="disponibilidade" required>
                <label class="form-check-label" for="validationDefault11">
                    Disponível
                </label>
            </div>
        </div>
        <div class="col-12">
            <label class="form-label" for="validationDefault12">Sinopse</label>
            <textarea class="form-control" name="sinopse" id="validationDefault11" required></textarea>
        </div>
        <div class="d-md-flex justify-content-md-center mt-4">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>

</div>

<div class="py-5"></div>

<?php include "../includes/rodape.php"; ?>