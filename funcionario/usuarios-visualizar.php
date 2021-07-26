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
                <a href="<?php echo $comprovante_residencia; ?>" target="_blank">Comprovante  de Residência</a><br>
                <a href="<?php echo $anexo_rg; ?>" target="_blank">Cópia do RG</a><br>
                <a href="<?php echo $anexo_cpf; ?>" target="_blank">Cópia do CPF</a>
            </div>
        </div>
    </div>

    <h3 class="mt-4">Livros reservados/emprestados</h3>
    <div class="row mt-3">
        <div class="row col-md-12 position-relzative">
            <?php

            $sqlBuscarAgenda = "SELECT tb_agendar.id,
            tb_livros.foto as 'foto',
            tb_livros.nome_livro as 'nome_livro',
            tb_livros.serie as 'serie',
            tb_livros.nome_autor as 'nome_autor',
            tb_agendar.id_usuario as 'id_usuario',
            tb_agendar.data_retirada,
            tb_agendar.data_devolucao,
            tb_agendar.status
            from tb_agendar
            inner join tb_livros on tb_agendar.id_livro = tb_livros.id
            inner join tb_usuarios on tb_agendar.id_usuario = tb_usuarios.id WHERE id_usuario={$id_usuario}";

            $listaAgendaUsuario = mysqli_query($conexao, $sqlBuscarAgenda);
        
                while($usuarioAgenda = mysqli_fetch_assoc($listaAgendaUsuario)){
                    echo "<p class='col-2 p-md-4'>";
                    echo "<img src='{$usuarioAgenda['foto']}'  class='img-fluid rounded-start'>";
                    echo "</p>";
                    echo "<div class='col-2 p-4 ps-md-0'>";
                    echo "<h6>{$usuarioAgenda['nome_livro']}</h6>";
                    echo "<p>";
                    echo "{$usuarioAgenda['serie']}<br>";
                    echo "{$usuarioAgenda['nome_autor']}<br>";

                    $dataRetirada = date('d-m-Y', strtotime($usuarioAgenda['data_retirada']));
                    echo "<td>{$dataRetirada}</td><br>";

                    $dataDevolucao = date('d-m-Y', strtotime($usuarioAgenda['data_devolucao']));
                    echo "<td>{$dataDevolucao}</td><br>";
                    
                    if($usuarioAgenda['status'] =='Reservado'){
                        echo "<button type='button' class='btn btn-warning mt-2'>Reservado</button>";
                    }else{
                        echo "<button type='button' class='btn btn-danger mt-2'>Emprestado</button>";
                    } 
                    echo "</p>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>
</div>
<?php include "../includes/rodape.php"; ?>