<?php include "../includes/cabecalho.php"; 

if (!isset($_SESSION['nomeFuncionario'])){
    header('Location: funcionario-login.php?');
}
?>

<?php 
include "../includes/conexao.php";

$sqlBusca = "SELECT
            tb_agendar.id,
            tb_livros.nome_livro as 'nome_livro',
            tb_usuarios.nome as 'nome',
            tb_agendar.data_retirada,
            tb_agendar.data_devolucao,
            tb_agendar.status
            from tb_agendar
            inner join tb_livros on tb_agendar.id_livro = tb_livros.id
            inner join tb_usuarios on tb_agendar.id_usuario = tb_usuarios.id WHERE status='Reservado'";


$listaDeLivros = mysqli_query($conexao , $sqlBusca);

?>

<div class="container">
    <div class="py-5">
        <h2>Livros reservados </h2>
        <table class="table mt-4 text-center">
            <tr class="table-success">
                <td>ID</td>
                <td>Livro</td>
                <td>Usuário</td>
                <td>Data de retirada</td>
                <td>Data de Devolução</td>
                <td>Status</td>
                <td>Ação</td>
            </tr>
            <?php
                while($agenda = mysqli_fetch_assoc($listaDeLivros)){
                    echo "<tr>";
                    echo "<td>{$agenda['id']}</td>";
                    echo "<td>{$agenda['nome_livro']}</td>";
                    echo "<td>{$agenda['nome']}</td>";
                    echo "<td>{$agenda['data_retirada']}</td>";
                    echo "<td>{$agenda['data_devolucao']}</td>";
                    echo "<td>{$agenda['status']}</td>";
                    echo "<td><a class='btn btn-warning' href='agenda-alterar.php?id={$agenda['id']}'><i class='bi bi-pencil-square'></i></a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>

    <?php
        $sqlBuscar = "SELECT
                tb_agendar.id,
                tb_livros.nome_livro as 'nome_livro',
                tb_usuarios.nome as 'nome',
                tb_agendar.data_retirada,
                tb_agendar.data_devolucao,
                tb_agendar.status
                from tb_agendar
                inner join tb_livros on tb_agendar.id_livro = tb_livros.id
                inner join tb_usuarios on tb_agendar.id_usuario = tb_usuarios.id WHERE status='Emprestado'";

$listaDeLivros = mysqli_query($conexao , $sqlBuscar);

?>
    <h2>Livros emprestados</h2>
    <table class="table mt-4 text-center">
        <tr class="table-success">
            <td>ID</td>
            <td>Livro</td>
            <td>Usuário</td>
            <td>Data de retirada</td>
            <td>Data de Devolução</td>
            <td>Status</td>
            <td>Ação</td>
        </tr>
        <?php
            while($agenda = mysqli_fetch_assoc($listaDeLivros)){
                echo "<tr>";
                echo "<td>{$agenda['id']}</td>";
                echo "<td>{$agenda['nome_livro']}</td>";
                echo "<td>{$agenda['nome']}</td>";
                echo "<td>{$agenda['data_retirada']}</td>";
                echo "<td>{$agenda['data_devolucao']}</td>";
                echo "<td>{$agenda['status']}</td>";
                echo "<td><a class='btn btn-danger' href='agenda-excluir.php?id={$agenda['id']}'><i class='bi bi-x-square'></i></a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</div>

<?php include "../includes/rodape.php"; ?>
