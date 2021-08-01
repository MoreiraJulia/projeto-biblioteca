<?php include "../includes/cabecalho.php"; 

include "../includes/conexao.php";

if (!isset($_SESSION['nomeFuncionario'])){
    header('Location: funcionario-login.php?');
}
?>

<div class="container">
    <h2 class="mt-5">Efetuar reserva / emprestimo</h2>
    <div class="row py-5">
        <form name="efetuar-reserva-emprestimo" method="post" action="emprestimo-efetuar.php" class="mt-3 col-6" enctype="multipart/form-data">
            <p class="col-9">
                <label class="form-label">Carteirinha do Usuário:</label>
                <input class="form-control" name="carteirinha" required>
            </p>
            <p class="col-9">
                <label class="form-label">Código do livro:</label>
                <input class="form-control" name="isbn" required>
            </p>
            <p class="col-9">
                <label class="form-label">Data de retirada</label>
                <input name="data_retirada" class="form-control" type="date" required>
            </p>
            <p class="col-9">
                <label class="form-label">Data de devolução</label>
                <input name="data_devolucao" class="form-control" type="date" required>
            </p>
            <div class="col-9 text-center">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="inlineRadio1" value="Reservado" name="status" required>
                    <label class="form-check-label" for="inlineRadio1" >Reservado</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Emprestado" required>
                    <label class="form-check-label" for="inlineRadio2" >Emprestado</label>
                </div>
            </div>
            <div class="col-9 d-md-flex justify-content-md-center mt-4">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
        <div class="col-6">
            <img src="../img/reserva.png">
        </div>
    </div>
</div>
<?php include "../includes/rodape.php"; ?>
