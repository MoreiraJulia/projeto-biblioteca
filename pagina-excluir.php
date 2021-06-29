<?php include "../includes/cabecalho.php"; 
include "../includes/conexao.php"; 

$id_livro = $_GET['id_livro'];

$sqlBuscar = "SELECT * FROM tb_livros WHERE id={$id_livro}";


$listaDeLivros = mysqli_query($conexao, $sqlBuscar);

$id = $isbn = $nome_livro = $genero = $serie = $classificacao = $editora = $edicao = $nome_autor = $endereco_biblioteca = $foto = "";

while($livro = mysqli_fetch_assoc($listaDeLivros)){
    $id = $livro['id'];
    $isbn = $livro['isbn'];
    $nome_livro = $livro['nome_livro'];
    $genero = $livro['genero'];
    $serie = $livro['serie'];
    $classificacao = $livro['classificacao'];
    $editora = $livro['editora'];
    $edicao = $livro['edicao'];
    $nome_autor = $livro['nome_autor'];
    $endereco_biblioteca = $livro['endereco_biblioteca'];
    $foto = $livro['foto'];
}
?>

<div class="container">
    <h2 class="mt-5">Apagar cadastro de livro</h2>
    <div >
    <input name="id_livro" type="hidden" value="<?php echo $id_livro;?>">
    <div class="row mt-5">
        <div class="col-3">
            <img src="<?php echo $foto;?>">
        </div>
        <div class="col-7">
            <h4><?php echo $nome_livro;?></h4>
            <p>
                ISBN: <?php echo $isbn;?><br>
                Gênero: <?php echo $genero;?><br>
                Série: <?php echo $serie;?><br>
                Classificação: <?php echo $classificacao;?> anos<br>
                Editora: <?php echo $editora;?><br>
                Edição: <?php echo $edicao;?>ª<br>
                Autor: <?php echo $nome_autor;?><br>
                Unidade disponível: <?php echo $endereco_biblioteca;?>
            </p>
        </div>
    </div>
    <h3>Tem certeza que deseja excluiro cadastro do livro <?php echo $nome_livro;?>?</h3>
    <?php
  
    ?> 
    </div>
</div>

<?php include "../includes/rodape.php"; ?>