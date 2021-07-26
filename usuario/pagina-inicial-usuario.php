<?php include "../includes/cabecalho.php"; ?>

<?php
    if (!isset($_SESSION['NomeUsuario'])){
        header('Location: usuario-login.php?');
    }
?>

<div class="container">
    <h2 class="mt-5">Seja bem-vindo(a) Usuário</h2>
    <div class="row mt-5 d-flex justify-content-evenly">
        <a href="informacoes-pessoais.php" class="col-md-4 links"><div class="text-center">
            <div class="h-100 p-5 bg-light border rounded-3">
                <img src="../img/peopleG.png">
                <h3 class="mt-2">Informações pessoais</h3>
            </div>
        </div></a>
        <a href="reserva-emprestimo.php" class="col-md-4 links"><div class="text-center">
            <div class="h-100 p-5 bg-light border rounded-3">
                <img src="../img/booksG.png"><br>
                <h3 class="mt-2">Meus livros reservados/ emprestados</h3>
            </div>
        </div></a>
    </div>
</div>

<div class="py-5"></div>

<?php include "../includes/rodape.php"; ?>