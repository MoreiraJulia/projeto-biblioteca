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

<link rel="stylesheet" href="style.css">

<div class="container">
    <h2 class="mt-5"><?php echo $nome_livro;?></h2>
    <input name="id_livro" type="hidden" value="<?php echo $id_livro;?>">
    <div id="most-livro" class="row mt-5">
        <div id="most-img" class="col-3">
            <img src="../funcionario/<?php echo $foto;?>">
        </div>
        <div id="most-liv-inf" class="col-4 fs-5">
            <p>ISBN: <?php echo $isbn;?><br>
                Gênero: <?php echo $genero;?><br>
                Série: <?php echo $serie;?><br>
                Classificação: <?php echo $classificacao;?> anos<br>
                Editora: <?php echo $editora;?><br>
                Edição: <?php echo $edicao;?>ª<br>
                Autor: <?php echo $nome_autor;?><br>
                Unidade disponível: <?php echo $endereco_biblioteca;?><br>
                <br>
                <?php if($status == "Reservado"){?>
                    <button type="button" class="btn btn-danger">Indisponível</button>
                <?php }else if($status == "Emprestado"){?>
                    <button type="button" class="btn btn-danger">Indisponível</button>
                <?php }else if(!isset($_SESSION['NomeUsuario'])){
                        echo "<a type='button' class='btn btn-success' href='../usuario/usuario-login.php'>Disponível</a>";
                    }else{
                ?>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addAgendaModal">Disponível</button>
            </p>
        </div>
             
        <div class="modal fade row" id="addAgendaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addAgendaModalLabel">Selecione uma data para retirada</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="livro-agendar.php" method="post">
                        <div class="modal-body">
                            <p>
                                <input name="id_livro" type="hidden" value="<?php echo $id_livro;?>">
                            </p>
                            <p>
                                <label class="form-label">Data retirada</label>
                                <input class="form-control" type="date" name="data_retirada">
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Reservar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <h3 class="mt-5">Sinopse</h3>
    <p class="fs-5 "><?php echo $sinopse;?></p>
</div>

<?php include "../includes/rodape.php"; ?>