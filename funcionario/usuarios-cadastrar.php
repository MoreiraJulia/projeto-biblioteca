<?php include "../includes/conexao.php"; 

$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$endereco = $_POST['endereco'];

$dir = "img-usuario/";
$arquivo_usuario = $_FILES['arquivo_usuario'];
$foto_usuario = $dir . $arquivo_usuario['name'];

$dir = "img-usuario/";
$arquivo_residencia = $_FILES['arquivo_residencia'];
$foto_residencia = $dir . $arquivo_residencia['name'];

$dir = "img-usuario/";
$arquivo_rg = $_FILES['arquivo_rg'];
$foto_rg = $dir . $arquivo_rg['name'];

$dir = "img-usuario/";
$arquivo_cpf = $_FILES['arquivo_cpf'];
$foto_cpf = $dir . $arquivo_cpf['name'];

move_uploaded_file($arquivo_usuario['tmp_name'] , "$dir/" . $arquivo_usuario['name']);
move_uploaded_file($arquivo_residencia['tmp_name'] , "$dir/" . $arquivo_residencia['name']);
move_uploaded_file($arquivo_rg['tmp_name'] , "$dir/" . $arquivo_rg['name']);
move_uploaded_file($arquivo_cpf['tmp_name'] , "$dir/" . $arquivo_cpf['name']);

$sqlInserir = "INSERT INTO tb_usuarios(nome, data_nascimento, rg, cpf, telefone, cep, cidade, bairro, endereco, foto_usuario, comprovante_residencia, anexo_rg, anexo_cpf)
                values(
                '{$nome}', 
                '{$data_nascimento}',
                '{$rg}',
                '{$cpf}',
                '{$telefone}',
                '{$cep}',
                '{$cidade}',
                '{$bairro}',
                '{$endereco}',
                '{$foto_usuario}',
                '{$foto_residencia}',
                '{$foto_rg}',
                '{$foto_cpf}'
            );";

$resultado = mysqli_query($conexao , $sqlInserir);

if($resultado){
    header('location:pagina-inicial-funcionario.php?mensagem=cadastrado');
}else{
    echo "Algo deu errado.";
}
?>