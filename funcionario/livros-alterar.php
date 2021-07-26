<?php include "../includes/conexao.php"; 

$id_livro = $_POST['id_livro'];
$isbn = $_POST['isbn'];
$nome_livro = $_POST['nome_livro'];
$genero = $_POST['genero'];
$serie = $_POST['serie'];
$classificacao = $_POST['classificacao'];
$editora = $_POST['editora'];
$edicao = $_POST['edicao'];
$nome_autor = $_POST['nome_autor'];
$endereco_biblioteca = $_POST['endereco_biblioteca'];
$disponibilidade = "";
if(isset($_POST['disponibilidade'])){
    $disponibilidade = $_POST['disponibilidade'];
}
$dir = "images/";
$arquivo = $_FILES['arquivo'];
$foto = $dir . $arquivo['name'];

$sinopse = $_POST['sinopse'];

move_uploaded_file($arquivo['tmp_name'] , "$dir/" . $arquivo['name']);

$sqlAlterar = "UPDATE tb_livros set
                isbn = '{$isbn}',
                nome_livro = '{$nome_livro}',
                genero = '{$genero}',
                serie = '{$serie}',
                classificacao = '{$classificacao}',
                editora = '{$editora}',
                edicao = '{$edicao}',
                nome_autor = '{$nome_autor}',
                endereco_biblioteca = '{$endereco_biblioteca}',
                disponibilidade = '{$disponibilidade}',
                foto = '{$foto}',
                sinopse = '{$sinopse}'
                WHERE id = {$id_livro}";

$resultado = mysqli_query($conexao, $sqlAlterar);

if($resultado){
    header('location:listagem-livros.php?mensagem=alterado');
}else{
    echo "Ocorreu algum erro";
}
?>