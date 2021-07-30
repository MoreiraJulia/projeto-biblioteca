<?php
include "../includes/cabecalho.php"; 
include "../includes/conexao.php";

if (!isset($_SESSION['nomeFuncionario'])){
    header('Location: funcionario-login.php?');
}

$sqlBusca = "SELECT id, nome, data_nascimento, cpf, telefone FROM tb_usuarios";

$listarUsuarios = mysqli_query($conexao , $sqlBusca);

?>

<div class="container">
    <div class="row mt-5">
        <h2 class="col-10">Listagem de usuários cadastrados</h2>
        <div class="col-2">
            <a type="submit" class="btn btn-success" href="formulario-cadastro-usuario.php">Novo Usuário</a>
        </div>
    </div>
    <!-- <h3 class="mt-3">Listagem de Usuários</h3> -->
    <div class="row g-0 position-relative mt-2 justify-content-center mb-3">
        <form method="POST" id="form-pesquisa" action="" class="d-flex col-10 mt-4">
            <input class="form-control me-2" type="text" placeholder="Digite aqui" name="nomeUsuario" id="listagem">
            <input name="listarUsuarios" class="btn btn-danger" type="submit" value="Pesquisar">
        </form>
    </div>
    <table class="table mt-4 text-center">
        <tr class="table-success">
            <td>ID</td>
            <td>Nome</td>
            <td>Data de nascimento</td>
            <td>CPF</td>
            <td>Telefone</td>
            <td>Ações</td>
        </tr>

        <?php 
        $listarUsuarios = filter_input(INPUT_POST, 'listarUsuarios', FILTER_SANITIZE_STRING);
            if($listarUsuarios){
                $nomeUsuario = filter_input(INPUT_POST, 'nomeUsuario', FILTER_SANITIZE_STRING);
                $result_usuario = "SELECT * FROM tb_usuarios WHERE nome LIKE '%$nomeUsuario%'";
                $resultado_usuario = mysqli_query($conexao, $result_usuario);
                while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
                    echo "<tr>";
                    echo "<td>{$row_usuario['id']}</td>";
                    echo "<td>{$row_usuario['nome']}</td>";
                    echo "<td>{$row_usuario['data_nascimento']}</td>";
                    echo "<td>{$row_usuario['cpf']}</td>";
                    echo "<td>{$row_usuario['telefone']}</td>";
                    echo "<td><a class='btn btn-warning' href='usuarios-visualizar.php?id_usuario={$row_usuario['id']}'><i class='bi bi-eye-fill'></i></a></td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>
</div>

<?php include "../includes/rodape.php"; ?>