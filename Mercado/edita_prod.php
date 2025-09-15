<?php

include 'db.php';

$xxxx = $_GET['cd_prod'];

while ($linha = mysqli_fetch_array($produto)){

    if($linha['cd_prod'] == $xxxx){
			?>
			<h1>Editar Aluno</h1><br>
			<form method="post" action="processa_edita_prod.php">

				<input type="hidden" name="aaa" value= "<?php echo $linha['cd_prod']; ?>">

            <label>Nome:</label>
            <input type="text" name="bbb" placeholder="insira o nome do produto" value= "<?php echo $linha['nm_prod']; ?>">

            <label>Descrição:</label>
            <input type="text" name="ccc" placeholder="insira a descrição do produto" value= "<?php echo $linha['desc_prod']; ?>">

            <label>Valor:</label>
            <input type="number" step="0.01" name="ddd" placeholder="insira o preço do produto" value= "<?php echo $linha['valor_prod']; ?>">

            <input type="submit" value="inserir produto">
			</form>
		<?php }} ?>