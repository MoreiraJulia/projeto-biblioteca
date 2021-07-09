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

$dir = "img/";
$arquivo_residencia = $_FILES['arquivo_residencia'];
$foto = $dir . $arquivo_residencia['name_residencia'];

$dir = "img/";
$arquivo_rg = $_FILES['arquivo_rg'];
$foto = $dir . $arquivo_rg['name_rg'];

$dir = "img/";
$arquivo_cpf = $_FILES['arquivo_cpf'];
$foto = $dir . $arquivo_cpf['name_cpf'];

move_uploaded_file($arquivo_residencia['tmp_name'] , "$dir/" . $arquivo['name_residencia']);
move_uploaded_file($arquivo_rg['tmp_name'] , "$dir/" . $arquivo['name_rg']);
move_uploaded_file($arquivo_cpf['tmp_name'] , "$dir/" . $arquivo['name_cpf']);

$sqlInserir = "INSERT INTO tb_usuario(nome, data_nascimento, rg, cpf, telefone, cep, cidade, bairro, endereco, comprovante_residencia, anexo_rg, anexo_cpf)
                values(
                '{$nome}', 
                '{$data_nascimento}',
                '{$rg}',
                '{$cpf}',
                '{$telefone}',
                '{$cep}',
                '{$cidade}',
                '{$bairro}',
                '{$endereco_biblioteca}',
                '{$disponibilidade}',
                '{$foto}',
                '{$sinopse}'
            );";
?>