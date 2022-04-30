<?php 

session_start();

require_once 'db_connectdois.php';

if(isset($_POST['btn-editar'])):

	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$uso = mysqli_escape_string($connect, $_POST['uso']);
	
	


	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE produtos SET nome= '$nome' , uso= '$uso' WHERE id=$id";

	if(mysqli_query($connect, $sql)):

		$_SESSION['mensagem'] = "Atualizado com sucesso!!!";
		header('Location: ../index.php');

	else:

		$_SESSION['mensagem'] = "Erro ao atualizar!!!";
		header('Location: ../index.php');

	endif;

endif;