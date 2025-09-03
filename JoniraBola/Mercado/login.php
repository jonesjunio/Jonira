<?php

include 'db.php';

$a = $_POST['nm_usuario'];//Para evitar o sql injection x' or 1=1 or 'x'
$b = $_POST['senha'];

$query = "SELECT*FROM usuario WHERE nm_usuario = '$a' and senha = '$b'";

$consulta = mysqli_query($conexao, $query);

if (mysqli_num_rows($consulta)==1){
	/*echo 'login feito com sucesso';*/

	session_start();
	$_SESSION['login']=true;
	$_SESSION['usuario']=$usuario;
	
	header('location:index.php');
}
else{
	/*echo 'usuário e/ou senha inválido(s)';*/
	header('location:index.php?erro');	
}