<?php 
session_start();
unset($_SESSION['NomeUsuario']);
unset($_SESSION['nomeFuncionario']);
?>
<script>location.href='../paginas/index.php';</script>