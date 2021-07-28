<?php include "../includes/cabecalho.php";

if (!isset($_SESSION['nomeFuncionario'])){
    header('Location: funcionario-login.php?');
}
?>

<div class="container">
    <h1 class="mt-5 py-5">Cadastro de Usuário</h1>
    <form name="cadastro-usuarios" method="post" action="usuarios-cadastrar.php" class="row mt-3" enctype="multipart/form-data">
        <p class="col-8">
            <label class="form-label" for="validationDefault01">Nome:</label>
            <input name="nome" class="form-control" id="validationDefault01" required>
        </p>
        <p class="col-4">
            <label class="form-label" for="validationDefault02">Data de Nascimento</label>
            <input name="data_nascimento" class="form-control" for="validationDefault02" type="date" required>
        </p>
        <p class="col-4">
            <label class="form-label" for="validationDefault03">RG:</label>
            <input name="rg" class="form-control" for="validationDefault03">
        </p>
        <p class="col-4">
            <label class="form-label" for="validationDefault04">CPF:</label>
            <input name="cpf" class="form-control" for="validationDefault04">
        </p>
        <p class="col-4">
            <label class="form-label" for="validationDefault05">Telefone:</label>
            <input name="telefone" class="form-control" for="validationDefault05">
        </p>
        <p class="col-4">
            <label class="form-label" for="validationDefault06">CEP:</label>
            <input name="cep" class="form-control" for="validationDefault06">
        </p>
        <p class="col-4">
            <label class="form-label" for="validationDefault07">Cidade:</label>
            <input name="cidade" class="form-control" for="validationDefault07">
        </p>
        <p class="col-4">
            <label class="form-label" for="validationDefault08">Bairro:</label>
            <input name="bairro" class="form-control" for="validationDefault08">
        </p>
        <p class="col-7">
            <label class="form-label" for="validationDefault09">Endereço:</label>
            <input name="endereco" class="form-control" for="validationDefault09">
        </p>
        <p class="col-6">
            <label class="form-label" for="validationDefault13">Foto:</label>
            <input type="file" name="arquivo_usuario" class="form-control" id="validationDefault13" required>
        </p> 
        <p class="col-6">
            <label class="form-label" for="validationDefault10">Comprovante de Residência:</label>
            <input type="file" name="arquivo_residencia" class="form-control" id="validationDefault10" required>
        </p> 
        <p class="col-6">
            <label class="form-label" for="validationDefault11">Anexo do RG:</label>
            <input type="file" name="arquivo_rg" class="form-control" id="validationDefault11" required>
        </p> 
        <p class="col-6">
            <label class="form-label" for="validationDefault12">Anexo do CPF:</label>
            <input type="file" name="arquivo_cpf" class="form-control" id="validationDefault12" required>
        </p> 
        <div class="d-md-flex justify-content-md-center mt-4">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>

    </form>

</div>

<?php include "../includes/rodape.php";?>