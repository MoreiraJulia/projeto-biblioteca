<?php include "../includes/cabecalho.php"; ?>
<?php 
include "../includes/conexao.php";

$sqlBusca = "SELECT id, isbn, nome_livro, serie, nome_autor FROM tb_livros";

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

    <?php if(isset($_GET['mensagem'])){
     if($_GET['mensagem'] == 'alterado'){
        ?>
        <div class="alert alert-warning">
            Alterado com sucesso!
        </div>
    <?php
        }
    }
    ?>

        <table class="table mt-4 text-center">
            <tr class="table-primary">
                <td>ID</td>
                <td>Nome</td>
                <td>ISNB</td>
                <td>Série</td>
                <td>Autor</td>
                <td>Ações</td>
            </tr>

            <?php
            $listarLivro = filter_input(INPUT_POST, 'listarLivro', FILTER_SANITIZE_STRING);
                if($listarLivro){
                    $nomeLivro = filter_input(INPUT_POST, 'nomeLivro', FILTER_SANITIZE_STRING);
                    $result_livro = "SELECT * FROM tb_livros WHERE nome_livro LIKE '%$nomeLivro%'";
                    $resultado_livro = mysqli_query($conexao, $result_livro);
                    while($row_livro = mysqli_fetch_assoc($resultado_livro)){
                        // echo "ID: " . $row_livro['nome_livro'] . "<br>";
                        echo "<tr>";
                        echo "<td>{$row_livro['id']}</td>";
                        echo "<td>{$row_livro['nome_livro']}</td>";
                        echo "<td>{$row_livro['isbn']}</td>";
                        echo "<td>{$row_livro['serie']}</td>";
                        echo "<td>{$row_livro['nome_autor']}</td>";
                        echo "<td><a class='btn btn-warning' href='livros-formulario-alterar.php?id_livro={$row_livro['id']}'><i class='bi bi-pencil-square'></i></a>";
                        echo "<a class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal' ><i class='bi bi-x-square'></i></a></td>";
                        echo "</tr>";
                        
                        echo "<div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                        echo "<div class='modal-dialog'>";
                        echo "<div class='modal-content'>";
                        echo "<div class='modal-header'>";
                        echo "<h5 class='modal-title' id='exampleModalLabel'>Excluir Cadastro</h5>";
                        echo "<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>";
                        echo "</div>";
                        echo "<div class='modal-body'>";
                        echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus sunt corrupti reiciendis perferendis harum, debitis, a, enim natus repudiandae non quas! Voluptatum corrupti rem vel.";
                        echo "</div>";
                        echo "<div class='modal-footer'>";
                        echo "<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>";
                        echo "<a class='btn btn-primary' href='livros-excluir.php?id_livro={$row_livro['id']}'>Save changes</a>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";

                    }
                }
        
        ?>
    
        </table>
   
</div>

<?php include "../includes/rodape.php"; ?>