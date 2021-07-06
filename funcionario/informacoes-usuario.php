<?php
include "../includes/cabecalho.php"; 
include "../includes/conexao.php";

$sqlBusca = "SELECT id, nome, data_nascimento, cpf, telefone FROM tb_usuarios";

$listagemDeLivros = mysqli_query($conexao , $sqlBusca);

?>

<div class="container">
    <h2 class="mt-5">Listagem de usuários cadastrados</h2>

    <div class="row g-0 position-relative mt-2 justify-content-center mb-3">
        <form method="POST" id="form-pesquisa" action="" class="d-flex col-10 mt-4">
            <input class="form-control me-2" type="text" placeholder="Digite aqui" name="nomeUsuario" id="listagem">
            <input name="listarUsuarios" class="btn btn-outline-danger" type="submit" value="Pesquisar">
        </form>
    </div>

        <table class="table mt-4 text-center">
            <tr class="table-primary">
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
                        // echo "ID: " . $row_livro['nome_livro'] . "<br>";
                        echo "<tr>";
                        echo "<td>{$row_usuario['id']}</td>";
                        echo "<td>{$row_usuario['nome']}</td>";
                        echo "<td>{$row_usuario['data_nascimento']}</td>";
                        echo "<td>{$row_usuario['cpf']}</td>";
                        echo "<td>{$row_usuario['telefone']}</td>";
                        echo "<td><a class='btn btn-warning' href='funcionario-usuarios-visualizar.php?id_usuario={$row_usuario['id']}'><i class='bi bi-pencil-square'></i></a></td>";
                        echo "</tr>";

                    }
                }
        
        ?>
    
        </table>
   
</div>

<?php include "../includes/rodape.php"; ?>