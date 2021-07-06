<?php 

include_once 'conexao.php';

$livro = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

$result_user = "SELECT * FROM tb_livros WHERE nome_livro LIKE '%$livro%' LIMIT 20";
$resultado_user = mysqli_query($conexao, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0)){
    while($row_user = mysqli_fetch_assoc($resultado_user)){
        //echo "<li>".$row_user['nome_livro']."</li>";
        echo "<div class='col-md-2 p-md-4'>";
        echo "<a href='../paginas/mostruario-livros.php?id_livro={$row_user['id']}'><img src='../funcionario/{$row_user['foto']}' class='img-fluid rounded-start'></a>";
        echo "</div>";
        echo "<div class='col-md-4 p-4 ps-md-0'>";
        echo "<h5>{$row_user['nome_livro']}</h5>";
        echo "<p>{$row_user['serie']}<br>";
        echo "{$row_user['genero']}<br>";
        echo "{$row_user['nome_autor']}<br>";
        echo "{$row_user['endereco_biblioteca']}</p>";
        echo "</div>";
    }
}else{
    echo "Nenhum livro encontrado ...";
}

?>