<?php

include 'db.php';

$delecao = $_GET['prod'];


$query = "DELETE FROM produto WHERE cd_prod = $delecao";

mysqli_query($conexao, $query);

header('location:index.php?pagina=teste2');