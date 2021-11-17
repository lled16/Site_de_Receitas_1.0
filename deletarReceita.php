<?php 
	include "conexao.php";

	$nome = $_GET['id'];
	
	$sql = mysqli_query($conexao, "DELETE FROM receitas WHERE id = '$nome' ") OR DIE (mysqli_error($conexao));


	if(mysqli_insert_id($conexao)){
		header('Location: carregamento.php');
	}else{
		header('Location: carregamento.php');
	}

 ?>
