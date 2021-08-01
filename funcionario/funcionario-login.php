<?php include "../includes/cabecalho.php"; ?>

<div class="container">
    <div class="mt-5">
        <div class="row">
            <div class="col-md-6 d-flex align-content-center flex-wrap">
                <h2>Login Funcionário</h2>
                <form class="row mt-4" name="formulario-login-funcionario" action="login-funcionario.php" method="post">
                    <div class="col-md-12">
                        <label class="form-label">Nome:</label>
                        <input class="form-control" type="text" name="nome">
                    </div>
                    <div class="col-md-12 mt-3">
                        <label class="form-label">Senha:</label>
                        <input class="form-control" type="password" name="senha">
                    </div>
                    <div class="d-flex justify-content-md-center">
                        <button class="btn btn-primary mt-4" type="submit">Entrar</button>   
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <img src="../img/funcionario-login.png">
            </div>
        </div>
    </div>
</div>
<div class="py-4"></div>

<?php include "../includes/rodape.php"; ?>