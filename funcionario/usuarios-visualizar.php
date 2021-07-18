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
    <h2 class="mt-5"><?php echo $nome;?></h2>
    <div>
        <input name="id_usuario" type="hidden" value="<?php echo $id_usuario;?>">
        <div class="row mt-5">
            <div class="col-3">
                <img src="<?php echo $foto_usuario;?>">
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
                <a href="<?php echo $comprovante_residencia; ?>">Comprovante  de Residência</a><br>
                <a href="<?php echo $anexo_rg; ?>">Cópia do RG</a><br>
                <a href="<?php echo $anexo_cpf; ?>">Cópia do CPF</a>
            </div>
        </div>
    </div>


    <?php

    $sqlBuscarAgenda = "SELECT tb_agendar.id,
    tb_livros.foto as 'foto',
    tb_livros.nome_livro as 'nome_livro',
    tb_livros.serie as 'serie',
    tb_livros.nome_autor as 'nome_autor',
    tb_usuarios.nome as 'nome',
    tb_agendar.data_retirada,
    tb_agendar.data_devolucao,
    tb_agendar.status
    from tb_agendar
    inner join tb_livros on tb_agendar.id_livro = tb_livros.id
    inner join tb_usuarios on tb_agendar.id_usuario = tb_usuarios.id WHERE id_usuario={$id_usuario}";

    $listaAgendaUsuario = mysqli_query($conexao, $sqlBuscarAgenda);

    $id = $id_livro = $id_usuario = $data_retirada = $data_devolucao = $status = "";
    
        while($usuarioAgenda = mysqli_fetch_assoc($listaAgendaUsuario)){
            $id = $usuarioAgenda['id'];
            $foto = $usuarioAgenda['foto'];
            $nome_livro = $usuarioAgenda['nome_livro'];
            $serie = $usuarioAgenda['serie'];
            $nome_autor = $usuarioAgenda['nome_autor'];
            $data_retirada = $usuarioAgenda['data_retirada'];
            $data_devolucao = $usuarioAgenda['data_devolucao'];
            $status = $usuarioAgenda['status'];
        }
   
    ?>

    <h4 class="mt-5">Livros Emprestados</h4>
    <div class="row mt-4 ">
        <p class="col-2">
            <img src="<?php echo $foto; ?>" style="width: 130px">
        </p>
        <p class="col-3">
            <?php echo $nome_livro; ?><br>
            <?php echo $serie; ?><br>
            <?php echo $nome_autor; ?><br>
            <?php echo $data_retirada; ?><br>
            <?php echo $data_devolucao; ?><br>
            <?php echo $status; ?><br>
    </p>
    </div>
   



</div>
<?php include "../includes/rodape.php"; ?>