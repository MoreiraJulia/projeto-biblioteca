<?php 
include "../includes/conexao.php";

$id_agenda = $_GET['id_agenda'];
$sqlExcluir = "DELETE FROM tb_agendar WHERE id = {$id_agenda}";
$resultado = mysqli_query($conexao, $sqlExcluir);

if($resultado){
    header('location:reserva-emprestimo.php?mensagem=excluido');
    echo "Excluído com sucesso";
}else{
    echo "Ocorreu algum problema";
}
?>