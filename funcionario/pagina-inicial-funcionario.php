<?php include "../includes/cabecalho.php";?>
<?php
    session_start();
    if(!isset($_SESSION['FuncionarioLog'])){
        header("Location: ../paginas/login.php");
    }
?>

<div class="container">
    <h2 class="mt-5 py-3">Bem vindo</h2>

    <?php if(isset($_GET['mensagem'])){
        if($_GET['mensagem'] == 'cadastrado'){
            ?>
            <div class="alert alert-primary">
                Cadastrado com sucesso!
            </div>
            <?php 
        }
        if($_GET['mensagem'] == 'excluido'){
        ?>
            <div class="alert alert-danger">
                Excluido com sucesso!
            </div>
        <?php
        }
    }
    ?>

        <div class="row mt-5 d-flex justify-content-evenly">
            <a href="#" class="col-md-4 links"><div class="text-center">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <img src="../img/peopleG.png">
                    <h3 class="mt-2">Informações dos usuários</h3>
                </div>
            </div></a>
            <a href="reserva-emprestimo.php" class="col-md-4 links"><div class="text-center">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <img src="../img/booksG.png"><br>
                    <h3 class="mt-2">Livros reservados/ emprestados</h3>
                </div>
            </div></a>
            <a href="formulario-cadastro-livros.php" class="col-md-4 links"><div class="text-center">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <img src="../img/livroG.png">
                    <h3 class="mt-2">Cadastramento de livros</h3>
                </div>
            </div></a>
        </div>
   
        <div class="row mt-4 d-flex justify-content-evenly">
            <a href="listagem-livros.php" class="col-md-4 links"><div class="text-center">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <img src="../img/lista.png">
                    <h3 class="mt-2">Listagem de livros</h3>
                </div>
            </div></a>
        </div>
</div>

<div class="py-5"></div>

<?php include "../includes/rodape.php"; ?>
