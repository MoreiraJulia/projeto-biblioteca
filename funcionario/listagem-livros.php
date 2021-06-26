<?php include "../includes/cabecalho.php"; ?>
<?php include_once "../includes/conexao.php"; ?>

<div class="container">
    <h2>Listagem de livros cadastrados</h2>
    <div class="row g-0 position-relative mt-4 justify-content-center">
        <form method="POST" id="form-pesquisa" action="" class="d-flex col-10">
            <input class="form-control me-2" type="text" placeholder="Digite aqui" name="nomeLivro" id="listagem">
            <input name="listarLivro" class="btn btn-outline-danger" type="submit" value="Pesquisar">
        </form>
    </div>
        <?php 
        $listarLivro = filter_input(INPUT_POST, 'listarLivro', FILTER_SANITIZE_STRING);
        if($listarLivro){
            $nomeLivro = filter_input(INPUT_POST, 'nomeLivro', FILTER_SANITIZE_STRING);
            $result_livro = "SELECT * FROM tb_livros WHERE nome_livro LIKE '%$nomeLivro%'";
            $resultado_livro = mysqli_query($conexao, $result_livro);
            while($row_livro = mysqli_fetch_assoc($resultado_livro)){
                echo "ID: " . $row_livro['nome_livro'] . "<br>";
            }
        }
        ?>
    

</div>

<?php include "../includes/rodape.php"; ?>