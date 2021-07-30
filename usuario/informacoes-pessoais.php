<?php include "../includes/cabecalho.php"; 
include "../includes/conexao.php"; 

    if(!isset($_SESSION['NomeUsuario'])){
        header('Location: usuario-login.php?');
    }

    $nomeUsuario = $_SESSION['NomeUsuario'];

    $sqlBuscar = "SELECT * FROM tb_usuarios WHERE nome ='". $_SESSION['NomeUsuario']."'";
    $resultado = mysqli_query($conexao , $sqlBuscar);

    $id = $nome = $data_nascimento = $rg = $cpf = $telefone = $cep = $cidade = $bairro = $endereco = $foto_usuario = $comprovante_residencia = $anexo_rg = $anexo_cpf = "";

    while($usuario = mysqli_fetch_assoc($resultado)){
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
    <h2 class="mt-5"><?php echo $nome;?></h2>
    <div>
        <input name="id_usuario" type="hidden" value="<?php echo $id_usuario;?>">
        <div class="row mt-5">
            <div class="col-3">
                <img src="../funcionario/<?php echo $foto_usuario;?>">
            </div>
            <div class="col-6 fs-5">
                <p>
                    NÚMERO DA CARTEIRINHA: <?php echo $id; ?><br>
                    DATA DE NASCIMENTO: <?php echo $data_nascimento; ?><br>
                    RG: <?php echo $rg; ?><br>
                    CPF: <?php echo $cpf; ?><br>
                    TELEFONE: <?php echo $telefone; ?><br>
                    CEP: <?php echo $cep; ?><br>
                    CIDADE: <?php echo $cidade; ?><br>
                    BAIRRO: <?php echo $bairro; ?><br>
                    ENDEREÇO: <?php echo $endereco; ?><br>
                </p>
            </div>
            <div class="col-3 fst-italic">
                <a href="../funcionario/<?php echo $comprovante_residencia; ?>" target="_blank">Comprovante  de Residência</a><br>
                <a href="../funcionario/<?php echo $anexo_rg; ?>" target="_blank">Cópia do RG</a><br>
                <a href="../funcionario/<?php echo $anexo_cpf; ?>" target="_blank">Cópia do CPF</a>
            </div>
        </div>
    </div>

<?php include "../includes/rodape.php"; ?>