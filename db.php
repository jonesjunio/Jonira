<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "produtosimples";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);
$query = "SELECT * FROM produto";
$consulta_produto = mysqli_query($conexao, $query);
