<?php include "../includes/cabecalho.php"; ?>

<div class="container">

    <h1 class="mt-5 py-5">Cadastro de livros</h1>

    <form name="cadastro-livros" method="post" action="livros-cadastrar.php" class="row mt-3" enctype="multipart/form-data">
    <p class="col-4">
            <label class="form-label">ISBN-13:</label>
            <input name="isbn" class="form-control" min="14" maxlength="14">
        </p>
        <p class="col-8">
            <label class="form-label">Nome do livro:</label>
            <input name="nome_livro" class="form-control">
        </p>
       
        <p class="col-6">
            <label class="form-label">Gênero:</label>
            <input name="genero" class="form-control">
        </p>
        <p class="col-6">
            <label class="form-label">Série:</label>
            <input name="serie" class="form-control">
        </p>
        <p class="col-3">
            <label class="form-label">Classificação:</label>
            <input name="classificacao" class="form-control" type="number">
        </p>
        <p class="col-5">
            <label class="form-label">Editora:</label>
            <input name="editora" class="form-control">
        </p>
        <p class="col-4">
            <label class="form-label">Edição:</label>
            <input name="edicao" class="form-control" type="number">
        </p>
        <p class="col-6">
            <label class="form-label">Nome do autor:</label>
            <input name="nome_autor" class="form-control">
        </p>
        <p class="col-6">
            <label class="form-label">Biblioteca disponível:</label>
            <input name="endereco_biblioteca" class="form-control">
        </p>
        <p class="col-6">
            <label class="form-label">Foto:</label>
            <input type="file" name="arquivo" class="form-control">
        </p> 
        <div class="col-6 mt-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" name="disponibilidade" required>
                <label class="form-check-label" >
                    Disponível
                </label>
            </div>
        </div>
        <div class="d-md-flex justify-content-md-center mt-4">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>

</div>

<div class="py-5"></div>

<?php include "../includes/rodape.php"; ?>