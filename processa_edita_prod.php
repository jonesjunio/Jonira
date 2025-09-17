<?php

include 'db.php';

$idedi = $_POST['id'];
$nmedi = $_POST['nome'];
$descedi = $_POST['desc'];
$valedi = $_POST['valor'];

$query = "UPDATE PRODUTO SET nm_prod='$nmedi',desc_prod='$descedi',valor_prod='$valedi' WHERE cd_prod = '$idedi'";

mysqli_query($conexao, $query);

header('location:index.php?pagina=teste2');