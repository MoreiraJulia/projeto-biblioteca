<?php
// session_start();

// if(isset($_SESSION['FuncionarioLog'])){
//     header("Location: pagina-inicial-funcionario.php");
// }

$nomeFuncionario = $_POST['nome'];
$senhaFuncionario = $_POST['senha'];

echo "{$nomeFuncionario} - {$senhaFuncionario}";

include "../includes/conexao.php";

$sqlBusca = "SELECT * FROM tb_funcionario WHERE nome = '{$nomeFuncionario}' and senha = '{$senhaFuncionario}'";

$resultado = mysqli_query($conexao , $sqlBusca);

if(mysqli_num_rows($resultado) > 0){
    // $_SESSION['FuncionarioLog'] = true;
    header('Location: pagina-inicial-funcionario.php?');
}else{
    header('Location: funcionario-login.php?');
}
?>