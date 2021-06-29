<?php include "../includes/cabecalho.php"; ?>

<?php
    session_start();
    if(!isset($_SESSION['FuncionarioLog'])){
        header("Location: ../paginas/login.php");
    }
?>

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
                        echo "<td><a class='btn btn-warning' href='formulario-alterar-livros.php?id_livro={$row_livro['id']}'><i class='bi bi-pencil-square'></i></a> | ";
                        echo "<a class='btn btn-danger' href='livros-excluir.php?id_livro={$row_livro['id']}'><i class='bi bi-x-square'></i></a></td>";
                        echo "</tr>";

                    }
                }
        
        ?>
    
        </table>
   
</div>

<?php include "../includes/rodape.php"; ?>