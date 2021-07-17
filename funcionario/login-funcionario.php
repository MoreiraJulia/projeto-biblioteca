<?php
session_start();

$nomeFuncionario = $_POST['nome'];
$senhaFuncionario = $_POST['senha'];

echo "{$nomeFuncionario} - {$senhaFuncionario}";

include "../includes/conexao.php";

$sqlBusca = "SELECT * FROM tb_funcionario WHERE nome = '{$nomeFuncionario}' and senha = '{$senhaFuncionario}'";

$resultado = mysqli_query($conexao , $sqlBusca);

if(mysqli_num_rows($resultado) > 0){
    
    while($Funcionario = mysqli_fetch_assoc($resultado)){
        $_SESSION['nomeFuncionario'] = $Funcionario['nome'];
        $_SESSION['senhaFuncionario'] = $Funcionario['senha'];
    }
    header('Location: pagina-inicial-funcionario.php?');
}else{
    header('Location: funcionario-login.php?');
}
    
?>