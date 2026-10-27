<?php
$conexao = mysqli_connect(
    "localhost",
    "root",
    "",
    "EmpresaDeLimpezaEHigienizacao",
    3307
);

if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

mysqli_set_charset($conexao, "utf8mb4");
?>