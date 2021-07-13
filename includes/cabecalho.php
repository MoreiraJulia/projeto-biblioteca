<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Home</title>
</head>
<body>
    <main class="">
        <header class="container">
            <nav class="navbar navbar-light navbar-expand-lg">
                <a href="../paginas/index.php" class="nav-brand">
                    <img src="../img/logo5.png" id="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navegacao-principal" aria-controls="#navegacao-principal" aria-expanded="false"
                    aria-label="Toggle Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navegacao-principal">
                    <div class="navbar-nav">
                        <a class="nav-link" aria-current="page" href="../paginas/index.php">HOME</a>
                        <a class="nav-link" href="../paginas/quemsomos.php">QUEM SOMOS</a>
                        <a class="nav-link" href="../paginas/acervo.php">ACERVO</a>
                        <?php 
                        if(isset($_SESSION['NomeUsuario'])){?>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['NomeUsuario'];?></button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="../usuario/pagina-inicial-usuario.php">Perfil</a></li>
                                    <li><a class="dropdown-item" href="../usuario/usuario-logout.php">Sair</a></li>
                                </ul>
                            </div>
                        <?php }else{ ?>
                            <a class="nav-link" href="../paginas/login.php">LOGIN</a>
                        <?php }?>
                        
                    </div>
                </div>
                
            </nav>
        </header>