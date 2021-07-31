<?php include "../includes/cabecalho.php"; 

    if (!isset($_SESSION['NomeUsuario'])){
        header('Location: usuario-login.php?');
    }
?>

<div class="container">
    <h2 class="mt-5">Seja bem-vindo(a) <?php echo $_SESSION["NomeUsuario"]; ?></h2>
    <div class="row mt-5 d-flex justify-content-evenly">
        <a href="informacoes-pessoais.php" class="col-md-4 links">
            <div class="text-center">
                <img src="../img/usuario-informacao.png">
                <h3 class="mt-2 link-dark">Informações pessoais</h3>
            </div>
        </a>
        <a href="reserva-emprestimo.php" class="col-md-4 links">
            <div class="text-center">
                <img src="../img/reservados-emprestados.png"><br>
                <h3 class="mt-2 link-dark">Meus livros reservados/ emprestados</h3>
            </div>
        </a>
    </div>
</div>
<div class="py-5"></div>

<?php include "../includes/rodape.php"; ?>