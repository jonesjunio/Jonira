<?php 
include '../header.php';
include '../db.php';

$query = "SELECT * FROM produto";
$consulta_produto = mysqli_query($conexao, $query);
$produto = ($consulta_produto);
?>

<head>
    <meta charset="UTF-8">
    <title>Jonira Supermercados - Cadastrar Produtos</title>
    <link rel="stylesheet" href="../style.css">
</head>

<div class="top-bar">
    <img src="../joniralogo.png" alt="Jonirã Supermercados"> <!-- logo -->
    
    <div class="user-info">
        <img src="https://img.icons8.com/ios-filled/50/000000/user.png" alt="Usuário">
        Jones Juni
    </div>
</div>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Descrição</th>
            <th>Código</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
    <?php
        while($linha = mysqli_fetch_array($produto)){
            echo'<tr>';
                echo'<td>'.$linha['nm_prod'].'</td>';
                echo'<td>'.$linha['valor_prod'].'</td>';
                echo'<td>'.$linha['desc_prod'].'</td>';
                echo'<td>'.$linha['cd_prod'].'</td>';
                echo '<td> <a href="../deleta_aluno.php?prod='.$linha['cd_prod'].'">Deletar</a> </td>
				</tr>';
            echo'</tr>';
        }
        ?>
    </tbody>
</table>

<?php 
include '../footer.php';
?>