<?php

include 'db.php';

$xx = $_POST['aaa'];
$yy = $_POST['bbb'];
$ww = $_POST['ccc'];
$zz = $_POST['ddd'];

$query = "UPDATE PRODUTOS SET nm_prod='$yy',desc_prod='$ww',valor_prod='$zz', WHERE id = $xx";

mysqli_query($conexao, $query);

header('location:index.php?pagina=teste2');