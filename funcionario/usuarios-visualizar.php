<?php include "../includes/cabecalho.php"; 

if (!isset($_SESSION['nomeFuncionario'])){
    header('Location: funcionario-login.php?');
}

include "../includes/conexao.php"; 

$id_usuario = $_GET['id_usuario'];

$sqlBusca = "SELECT * FROM tb_usuarios WHERE id={$id_usuario}";

$listaUsuario = mysqli_query($conexao, $sqlBusca);

$id = $nome = $data_nascimento = $rg = $cpf = $telefone = $cep = $cidade = $bairro = $endereco = $foto_usuario = $comprovante_residencia = $anexo_rg = $anexo_cpf = "";

while($usuario = mysqli_fetch_assoc($listaUsuario)){
    $id = $usuario['id'];
    $nome = $usuario['nome'];
    $data_nascimento = $usuario['data_nascimento'];
    $rg = $usuario['rg'];
    $cpf = $usuario['cpf'];
    $telefone = $usuario['telefone'];
    $cep = $usuario['cep'];
    $cidade = $usuario['cidade'];
    $bairro = $usuario['bairro'];
    $endereco = $usuario['endereco'];
    $foto_usuario = $usuario['foto_usuario'];
    $comprovante_residencia = $usuario['comprovante_residencia'];
    $anexo_rg = $usuario['anexo_rg'];
    $anexo_cpf = $usuario['anexo_cpf'];
}
?>

<div class="container">
    <h2 class="mt-5"><?php echo $id;?></h2>
    <div>
        <input name="id_usuario" type="hidden" value="<?php echo $id_usuario;?>">
        <div class="row mt-5">
            <div class="col-3">
                <img src="<?php echo $foto_usuario;?>">
            </div>
            <div class="col-4 fs-5">
                <p>
                    <?php echo $id; ?>
                    <?php echo $data_nascimento; ?>
                    <?php echo $rg; ?>
                    <?php echo $cpf; ?>
                    <?php echo $telefone; ?>
                    <?php echo $cep; ?>
                    <?php echo $cidade; ?>
                    <?php echo $bairro; ?>
                    <?php echo $endereco; ?>

</div>


<?php include "../includes/rodape.php"; ?>