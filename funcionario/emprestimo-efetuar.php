<?php 
include "../includes/conexao.php";

$isbn = $_POST['isbn'];
$carteirinha = $_POST['carteirinha'];
$data_retirada = $_POST['data_retirada'];
$data_devolucao = $_POST['data_devolucao'];
$status = $_POST['status'];

$sqlInserir = "INSERT INTO tb_agendar(id_livro, id_usuario, data_retirada, data_devolucao, status) 
values(
'{$isbn}',
'{$carteirinha}',
'{$data_retirada}',
'{$data_devolucao}',
'{$status}'
);";

$resultado = mysqli_query($conexao , $sqlInserir);

if($resultado){
    header('location:pagina-inicial-funcionario.php?');
}else{
    echo "Algo deu errado.";
}
?>