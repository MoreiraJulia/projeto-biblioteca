<?php include "../includes/conexao.php"; 

$id = $_GET['id'];

$sqlAlterar ="UPDATE tb_agendar SET status='Emprestado' WHERE id={$id}";
$resultado = mysqli_query($conexao, $sqlAlterar);

if($resultado){
    header('location:reserva-emprestimo.php?mensagem');
    echo "Excluído com sucesso";
}else{
    echo "Ocorreu algum problema";
}
?>