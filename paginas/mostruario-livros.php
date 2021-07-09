<?php include "../includes/cabecalho.php"; 
include "../includes/conexao.php"; 

$id_livro = $_GET['id_livro'];

$sqlBuscar = "SELECT tb_livros.*, tb_agendar.status FROM tb_livros LEFT JOIN tb_agendar ON tb_livros.id = tb_agendar.id_livro WHERE tb_livros.id={$id_livro}";


$listaDeLivros = mysqli_query($conexao, $sqlBuscar);

$id = $isbn = $nome_livro = $genero = $serie = $classificacao = $editora = $edicao = $nome_autor = $endereco_biblioteca = $foto = $sinopse = $status = "";

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
    $sinopse = $livro['sinopse'];
    $status = $livro['status'];
}
?>

<div class="container">
    <h2 class="mt-5"><?php echo $nome_livro;?></h2>
    <div >
    <input name="id_livro" type="hidden" value="<?php echo $id_livro;?>">
    <div class="row mt-5">
        <div class="col-3">
            <img src="../funcionario/<?php echo $foto;?>">
        </div>
        <div class="col-4 fs-5">
            </p>
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
        <p><?php echo $status;?></p>
        <?php if($status == "Emprestado"){?>
            <button type="button">
                Indisponível
            </button>
        <?php }else{?>
            <form action="livro-agendar.php" method="post" class="row">
                <p>
                    <input name="id_livro" type="hidden" value="<?php echo $id_livro;?>">
                </p>
                <p class="col-4">
                    <label class="form-label">Data retirada</label>
                    <input class="form-control" type="date" name="data_retirada">
                </p>
                
                <button type="submit">
                    Disponível
                </button>
            </form>
        <?php } ?>
    </div>
    <h3 class="mt-5">Sinopse</h3>
        <p class="fs-5"><?php echo $sinopse; ?>
        </p>
    </div>
</div>

<?php include "../includes/rodape.php"; ?>