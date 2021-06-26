<?php include "../includes/cabecalho.php"; ?>

<div class="container">
    <div class="px-3 py-5">
        <div class="row mt-5 ">
            <div class="col-md-7">
                <div class="h-100 p-5 rounded-3">
                    <h2>Faça login aqui</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet atque quia dolorem tempora delectus, alias id quis perferendis explicabo.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet atque quia dolorem tempora delectus, alias id quis perferendis explicabo.</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="h-100 p-5 bg-light border rounded-3">
                <h2 class="text-center">Login Funcionário</h2>
                <form class="row mt-4">
                    <div class="col-md-12">
                        <label class="form-label">Nome:</label>
                        <input class="form-control" type="text" name="nome">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Senha:</label>
                        <input class="form-control" type="password" name="senha">
                    </div>
                    <div class="d-flex justify-content-md-center">
                        <div class="col-3">
                            <button class="btn btn-primary mt-3" type="submit">Entrar</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5"></div>

<?php include "../includes/rodape.php"; ?>