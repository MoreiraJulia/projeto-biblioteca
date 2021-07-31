<?php include "../includes/cabecalho.php"; ?>

<div class="container">
    <div class="px-3 py-5">
        <div class="row">
            <div class="col-md-6 d-flex align-content-center flex-wrap">
                <h2>Login Usuário</h2>
                <form class="row mt-4" method="post" action="login-usuario.php">
                    <div class="col-md-12">
                        <label class="form-label">Nome:</label>
                        <input class="form-control" type="text" name="NomeUsuario">
                    </div>
                    <div class="col-md-12 mt-3">
                        <label class="form-label">Número da carteirinha:</label>
                        <input class="form-control" type="password" name="CarteirinhaUsuario">
                    </div>
                    <div class="d-flex justify-content-md-center">
                        <button class="btn btn-primary mt-4" type="submit">Entrar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <img src="../img/login-usuario.png">
            </div>
        </div>
    </div>
</div>
<div class="py-5"></div>

<?php include "../includes/rodape.php"; ?>