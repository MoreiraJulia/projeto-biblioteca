<?php
session_start();

// if(isset($_SESSION['FuncionarioLog'])){
//     header("Location: pagina-inicial-funcionario.php");
// }

$nomeUsuario = $_POST['nome'];
$carteirinhaUsuario = $_POST['carteirinha'];

echo "{$nomeUsuario} - {$carteirinhaUsuario}";

include "../includes/conexao.php";

$sqlBusca = "SELECT * FROM tb_usuarios WHERE nome = '{$nomeUsuario}' and id = '{$carteirinhaUsuario}'";

$resultado = mysqli_query($conexao , $sqlBusca);

if(mysqli_num_rows($resultado) > 0){
    // $_SESSION['FuncionarioLog'] = true;
    while($Usuario = mysqli_fetch_assoc($resultado)){
        $_SESSION['NomeUsuario'] = $Usuario['nome'];
        $_SESSION['CarteirinhaUsuario'] = $Usuario['id'];
    }
    header('Location: pagina-inicial-usuario.php?');
}else{
    header('Location: usuario-login.php?');
}
?>