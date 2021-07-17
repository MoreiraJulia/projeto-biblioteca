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
            inner join tb_usuarios on tb_agendar.id_usuario = tb_usuarios.id";
$listaDeLivros = mysqli_query($conexao , $sqlBusca);
?>

<div class="container">
    <div class="py-5">
        <h2>Livros reservados / emprestados</h2>

        <table class="table mt-4 text-center">
            <tr class="table-primary">
                <td>ID</td>
                <td>Livro</td>
                <td>Usuário</td>
                <td>Data de retirada</td>
                <td>Data de Devolução</td>
                <td>Status</td>
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
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</div>

<?php include "../includes/rodape.php"; ?>
