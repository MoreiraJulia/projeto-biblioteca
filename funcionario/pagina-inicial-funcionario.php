<?php include "../includes/cabecalho.php";

    if (!isset($_SESSION['nomeFuncionario'])){
        header('Location: funcionario-login.php?');
    }
?>

<div class="container">
    <h2 class="mt-5 py-3">Bem vindo <?php echo $_SESSION["nomeFuncionario"]; ?></h2>
    <?php if(isset($_GET['mensagem'])){
        if($_GET['mensagem'] == 'cadastradoLivro'){?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Livro</strong> cadastrado com sucesso!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php 
        }
        if($_GET['mensagem'] == 'excluidoLivro'){?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Livro</strong> excluido com sucesso!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        if($_GET['mensagem'] == 'alterado'){?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Alterado</strong> com sucesso!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        if($_GET['mensagem'] == 'cadastrado'){?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Usuário</strong> cadastrado com sucesso!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        } 
    }?>
    <div class="row mt-5 d-flex justify-content-evenly">
        <a href="informacoes-usuario.php" class="col-md-4 links">
            <div class="text-center">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <img src="../img/peopleG.png">
                    <h3 class="mt-2">Informações dos usuários</h3>
                </div>
            </div>
        </a>
        <a href="reserva-emprestimo.php" class="col-md-4 links">
            <div class="text-center">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <img src="../img/booksG.png"><br>
                    <h3 class="mt-2">Livros reservados/ emprestados</h3>
                </div>
            </div>
        </a>
        <a href="formulario-cadastro-livros.php" class="col-md-4 links">
            <div class="text-center">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <img src="../img/livroG.png">
                    <h3 class="mt-2">Cadastramento de livros</h3>
                </div>
            </div>
        </a>
    </div>
    <div class="row mt-4 d-flex justify-content-evenly">
        <a href="listagem-livros.php" class="col-md-4 links">
            <div class="text-center">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <img src="../img/lista.png">
                    <h3 class="mt-2">Listagem de livros</h3>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="py-5"></div>

<?php include "../includes/rodape.php"; ?>
