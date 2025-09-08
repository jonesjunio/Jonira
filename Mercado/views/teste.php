<?php 
include 'header.php'; 
include 'db.php'; 

// Consulta os produtos do banco, se desejar carregar dinamicamente
$query = "SELECT * FROM produto";
$resultado = mysqli_query($conexao, $query);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Jonira Supermercados - Cadastrar Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- TOPO -->
<div class="top-bar">
    <img src="joniralogo.png" alt="Jonirã Supermercados"> <!-- logo -->
    
    <div class="user-info">
        <img src="https://img.icons8.com/ios-filled/50/000000/user.png" alt="Usuário">
        Jones Juni
    </div>
</div>

<!-- CONTEÚDO PRINCIPAL -->
<div class="container">

    <!-- FORMULÁRIO -->
    <div class="form-container">
        <h2>Cadastrar Produtos</h2>
        <form method="post" action="processa_produtos.php">
            <label>Nome:</label>
            <input type="text" name="nm_prod" placeholder="insira o nome do produto" required>

            <label>Descrição:</label>
            <input type="text" name="desc_prod" placeholder="insira a descrição do produto" required>

            <label>Valor:</label>
            <input type="number" step="0.01" name="valor_prod" placeholder="insira o preço do produto" required>

            <input type="submit" value="inserir produto">
        </form>
        <a href="views/confirmacao_cadastro.php" class="botao">Tabela de produtos</a>
    </div>    
</body>
</html>

<?php include 'footer.php'; ?>
