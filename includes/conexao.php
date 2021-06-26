<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "bd_biblioteca";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

$pesquisa = ('pesquisa');
if(!$conexao){
    die("<h3>Não conectou</h3> Erro: " . mysqli_connect_error());
}
?>