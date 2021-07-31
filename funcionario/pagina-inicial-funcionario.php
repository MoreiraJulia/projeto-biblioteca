<?php include "../includes/cabecalho.php";

    if (!isset($_SESSION['nomeFuncionario'])){
        header('Location: funcionario-login.php?');
    }
?>

<div class="container">
    <h2 class="mt-5 py-3">Bem vindo(a) <?php echo $_SESSION["nomeFuncionario"]; ?></h2>
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
                <img src="../img/informacao-user.png">
                <h3 class="mt-2 link-dark">Informações dos usuários</h3>
            </div>
        </a>
        <a href="reserva-emprestimo.php" class="col-md-4 links">
            <div class="text-center">
                <img src="../img/calendar.png">
                <h3 class="mt-2 link-dark">Livros reservados/ emprestados</h3>
            </div>
        </a>
        <a href="formulario-cadastro-livros.php" class="col-md-4 links">
            <div class="text-center">
                <img src="../img/cadastrar-livros.png">
                <h3 class="mt-2 link-dark">Cadastramento de livros</h3>
            </div>
        </a>
    </div>
    <div class="row mt-5 d-flex justify-content-evenly">
        <a href="listagem-livros.php" class="col-md-4 links">
            <div class="text-center">
                <img src="../img/listagem-livros.png">
                <h3 class="mt-2 link-dark">Listagem de livros</h3>
            </div>
        </a>
    </div>
</div>
<div class="py-5"></div>

<?php include "../includes/rodape.php"; ?>
