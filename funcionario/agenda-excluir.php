<?php 
include "../includes/conexao.php";

$id= $_GET['id'];
$sqlExcluir = "DELETE FROM tb_agendar WHERE id = {$id}";
$resultado = mysqli_query($conexao, $sqlExcluir);

if($resultado){
    header('location:reserva-emprestimo.php?mensagem=devolvido');
    echo "Excluído com sucesso";
}else{
    echo "Ocorreu algum problema";
}
?>