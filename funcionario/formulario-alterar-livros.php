<?php include "../includes/cabecalho.php"; 

    if (!isset($_SESSION['nomeFuncionario'])){
        header('Location: funcionario-login.php?');
    }

include "../includes/conexao.php"; 

$id_livro = $_GET['id_livro'];

$sqlBuscar = "SELECT * FROM tb_livros WHERE id={$id_livro}";

$listaDeLivros = mysqli_query($conexao, $sqlBuscar);

$isbn = $nome_livro = $genero = $serie = $classificacao = $editora = $edicao = $nome_autor = $endereco_biblioteca = $disponibilidade = $foto = $sinopse = "";

while($livro = mysqli_fetch_assoc($listaDeLivros)){
    $isbn = $livro['isbn'];
    $nome_livro = $livro['nome_livro'];
    $genero = $livro['genero'];
    $serie = $livro['serie'];
    $classificacao = $livro['classificacao'];
    $editora = $livro['editora'];
    $edicao = $livro['edicao'];
    $nome_autor = $livro['nome_autor'];
    $endereco_biblioteca = $livro['endereco_biblioteca'];
    $disponibilidade = $livro['disponibilidade'];
    $foto = $livro['foto'];
    $sinopse = $livro['sinopse'];
}
?>

<div class="container">
    <form name="formulario-alterar-livros" class="mt-5 row" method="post" action="livros-alterar.php">
        <input name="id_livro" type="hidden" value="<?php echo $id_livro;?>">
        <p class="col-4">
            <label class="form-label">ISBN-13:</label>
            <input name="isbn" class="form-control" min="14" maxlength="14" value="<?php echo $isbn;?>">
        </p>
        <p class="col-8">
            <label class="form-label">Nome do livro:</label>
            <input name="nome_livro" class="form-control"  value="<?php echo $nome_livro;?>">
        </p>
       
        <p class="col-6">
            <label class="form-label">Gênero:</label>
            <input name="genero" class="form-control"  value="<?php echo $genero;?>">
        </p>
        <p class="col-6">
            <label class="form-label">Série:</label>
            <input name="serie" class="form-control"  value="<?php echo $serie;?>">
        </p>
        <p class="col-3">
            <label class="form-label">Classificação:</label>
            <input name="classificacao" class="form-control" value="<?php echo $classificacao;?>">
        </p>
        <p class="col-5">
            <label class="form-label">Editora:</label>
            <input name="editora" class="form-control"  value="<?php echo $editora;?>">
        </p>
        <p class="col-4">
            <label class="form-label">Edição:</label>
            <input name="edicao" class="form-control" value="<?php echo $edicao;?>">
        </p>
        <p class="col-6">
            <label class="form-label">Nome do autor:</label>
            <input name="nome_autor" class="form-control"  value="<?php echo $nome_autor;?>">
        </p>
        <p class="col-6">
            <label class="form-label">Biblioteca disponível:</label>
            <input name="endereco_biblioteca" class="form-control" value="<?php echo $endereco_biblioteca;?>">
        </p>
        
        
        <div class="col-2 mt-4">
            <div class="form-check">
            <?php 
            $marcado = "";
            if($disponibilidade == "Disponível"){
                $marcado = "checked";
            }
            ?>
                <input class="form-check-input" type="checkbox" value="Disponível" <?php echo $marcado;?> name="disponibilidade" >
                <label class="form-check-label">Disponível</label>
            </div>
        </div>
        <!-- <p class="col-6">
            <label class="form-label">Foto:</label>
            <img src="<?php echo $foto;?>" style="width:90px;">
            <input type="file" name="arquivo" class="form-control" >
        </p>  -->
        <p class="col-10">
            <label class="form-label">Sinopse</label>
            <textarea class="form-control" name="sinopse" ><?php echo $sinopse;?></textarea>
        </p>
        <div class="d-md-flex justify-content-md-center mt-4">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>

<?php include "../includes/rodape.php" ?>