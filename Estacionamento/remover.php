<?php 
	
	include('banco.php');

	if(isset($_GET['id'])){
		apagar_veiculo($conexao,$_GET['id']);
	}

	header('Location: estacionamento.php');
	die();

 ?>