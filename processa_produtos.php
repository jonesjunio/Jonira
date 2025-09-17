<?php

include 'db.php';

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$produto = $_POST['nm_prod'];
$valor = $_POST['valor_prod'];
$descricao = $_POST['desc_prod'];

$query = "INSERT INTO produto (nm_prod, valor_prod, desc_prod)
            VALUES('$produto', '$valor', '$descricao')";

mysqli_query($conexao, $query);

header('location:views\confirmacao_cadastro.php');
?>