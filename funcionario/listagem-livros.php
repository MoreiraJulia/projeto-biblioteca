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
                
                    echo "<button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#addAgendaModal'><i class='bi bi-x-square'></i></button></td>";
                    echo "</tr>";
                    ?>
                    <div class="modal fade row" id="addAgendaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <h5 class="modal-title text-white" id="addAgendaModalLabel">Excluir o livro "<?php echo "{$row_livro['nome_livro']}";?>"</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Tem certeza que deseja excluir este livro?</p>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
                                    <?php
                                    echo "<a class='btn btn-success' href='livros-excluir.php?id_livro={$row_livro['id']}'>Sim</a>";?>
                                </div>
                            </div>
                        </div>
                </div>
                <?php
                }
            };
        ?>
        
    </table> 
</div>

<?php include "../includes/rodape.php"; ?>