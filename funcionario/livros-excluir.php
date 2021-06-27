<?php 
include "../includes/conexao.php";

$id_livro = $_GET['id_livro'];
$sqlExcluir = "DELETE FROM tb_livros WHERE id = {$id_livro}";
$resultado = mysqli_query($conexao, $sqlExcluir);

if($resultado){
    // header('location:pagina-inicial-funcionario.php?mensagem=excluido');
    echo "Excluído com sucesso";
}else{
    echo "Ocorreu algum problema";
}
?>