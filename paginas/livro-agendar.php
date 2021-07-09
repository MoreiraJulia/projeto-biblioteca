<?php include "../includes/conexao.php"; 
session_start();

$id_livro = $_POST['id_livro'];
$id_usuario = $_SESSION['CarteirinhaUsuario'];
$data_retirada = $_POST['data_retirada'];
$status = "Reservado";

$sqlInserir = "INSERT INTO tb_agendar (id_livro, id_usuario, data_retirada, data_devolucao, status) values('{$id_livro}','{$id_usuario}', '{$data_retirada}', date_add( '{$data_retirada}', INTERVAL 10 day), '{$status}');";

$resultado = mysqli_query($conexao , $sqlInserir);

print_r($sqlInserir);

exit();

?>

