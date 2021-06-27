<?php 
include "../includes/conexao.php";

$isbn = $_POST['isbn'];
$nome_livro = $_POST['nome_livro'];
$genero = $_POST['genero'];
$serie = $_POST['serie'];
$classificacao = $_POST['classificacao'];
$editora = $_POST['editora'];
$edicao = $_POST['edicao'];
$nome_autor = $_POST['nome_autor'];
$endereco_biblioteca = $_POST['endereco_biblioteca'];
$disponibilidade = $_POST['disponibilidade'];

$dir = "images/";
$arquivo = $_FILES['arquivo'];
$foto = $dir . $arquivo['name'];

move_uploaded_file($arquivo['tmp_name'] , "$dir/" . $arquivo['name']);

$sqlInserir = "INSERT INTO tb_livros(isbn, nome_livro, genero, serie, classificacao, editora, edicao, nome_autor, endereco_biblioteca, disponibilidade, foto)
                values(
                '{$isbn}', 
                '{$nome_livro}',
                '{$genero}',
                '{$serie}',
                '{$classificacao}',
                '{$editora}',
                '{$edicao}',
                '{$nome_autor}',
                '{$endereco_biblioteca}',
                '{$disponibilidade}',
                '{$foto}'
            );";

$resultado = mysqli_query($conexao , $sqlInserir);

if($resultado){
    header('location:pagina-inicial-funcionario.php?mensagem=cadastrado');
}else{
    echo "Algo deu errado.";
}
?>