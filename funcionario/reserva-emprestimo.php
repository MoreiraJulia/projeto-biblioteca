<?php include "../includes/cabecalho.php"; ?>

<?php
    session_start();
    if(!isset($_SESSION['FuncionarioLog'])){
        header("Location: ../paginas/login.php");
    }
?>

<?php 
include "../includes/conexao.php";

// $emprestimo = ['disponibilidade'];

$sqlBusca = "SELECT id, isbn, nome_livro, serie, nome_autor, disponibilidade FROM tb_livros";

$listaDeLivros = mysqli_query($conexao , $sqlBusca);
?>


<div class="container">
<h2>Livros reservados</h2>
<table class="table mt-4 text-center">
    <tr class="table-primary">
        <td>ID</td>
        <td>Nome</td>
        <td>ISNB</td>
        <td>Série</td>
        <td>Autor</td>
        <td>Disponibilidade</td>
    </tr>
    <?php 
    $emprestimo = ['disponibilidade'];

    if($emprestimo == 'Disponível'){
        while($livro = mysqli_fetch_assoc($listaDeLivros)){
                echo "<tr>";
                echo "<td>{$livro['id']}</td>";
                echo "<td>{$livro['nome_livro']}</td>";
                echo "<td>{$livro['isbn']}</td>";
                echo "<td>{$livro['serie']}</td>";
                echo "<td>{$livro['nome_autor']}</td>";
                echo "<td>{$livro['disponibilidade']}</td>";
        }
    }else{
        echo "Algo deu errado";
    }
        
    ?>
</table>

</div>

<?php include "../includes/rodape.php"; ?>
