<?php
session_start();

$NomeUsuario = $_POST['NomeUsuario'];
$CarteirinhaUsuario = $_POST['CarteirinhaUsuario'];

echo "{$NomeUsuario} - {$CarteirinhaUsuario}";

include "../includes/conexao.php";

$sqlBusca = "SELECT * FROM tb_usuarios WHERE nome = '{$NomeUsuario}' and id = '{$CarteirinhaUsuario}'";

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