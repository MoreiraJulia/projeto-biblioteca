<?php include "../includes/cabecalho.php"; 

    if (!isset($_SESSION['nomeFuncionario'])){
        header('Location: funcionario-login.php?');
    }
 
include "../includes/conexao.php";


$sqlBusca = "SELECT * FROM tb_livros";

$listagemDeLivros = mysqli_query($conexao , $sqlBusca);

?>

<div class="container">
    <h2 class="mt-5">Listagem de livros cadastrados</h2>
    <div class="row g-0 position-relative mt-2 justify-content-center mb-3">
        <form method="POST" id="form-pesquisa" action="" class="d-flex col-10 mt-4">
            <input class="form-control me-2" type="text" placeholder="Digite aqui" name="nomeLivro" id="listagem">
            <input name="listarLivro" class="btn btn-outline-danger" type="submit" value="Pesquisar">
        </form>
    </div>

    <table class="table mt-4 text-center">
        <tr class="row table-success">
            <td class="col-2">ID</td>
            <td class="col-2">Nome</td>
            <td class="col-2">ISNB</td>
            <td class="col-2">Série</td>
            <td class="col-2">Autor</td>
            <td class="col-2">Ações</td>
        </tr>

        <?php
        $listarLivro = filter_input(INPUT_POST, 'listarLivro', FILTER_SANITIZE_STRING);
            if($listarLivro){
                $nomeLivro = filter_input(INPUT_POST, 'nomeLivro', FILTER_SANITIZE_STRING);
                $result_livro = "SELECT * FROM tb_livros WHERE nome_livro LIKE '%$nomeLivro%'";
                $resultado_livro = mysqli_query($conexao, $result_livro);
                while($row_livro = mysqli_fetch_assoc($resultado_livro)){
                    echo "<tr class='row'>";
                    echo "<td class='col-2'>{$row_livro['id']}</td>";
                    echo "<td class='col-2'>{$row_livro['nome_livro']}</td>";
                    echo "<td class='col-2'>{$row_livro['isbn']}</td>";
                    echo "<td class='col-2'>{$row_livro['serie']}</td>";
                    echo "<td class='col-2'>{$row_livro['nome_autor']}</td>";
                    echo "<td class='col-2'><a class='btn btn-warning' href='formulario-alterar-livros.php?id_livro={$row_livro['id']}'><i class='bi bi-pencil-square'></i></a> | ";
                
                    echo "<a type='button' href='livros-excluir.php?id_livro={$row_livro['id']}' class='btn btn-danger'><i class='bi bi-x-square'></i></a></td>";
                    echo "</tr>";
                   
                }
            }
        ?>
        
    </table> 
</div>

<?php include "../includes/rodape.php"; ?>