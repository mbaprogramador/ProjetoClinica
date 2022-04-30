<?php 

session_start();

require_once 'db_connectdois.php';

if(isset($_POST['btn-cadastrar'])):

	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$uso = mysqli_escape_string($connect, $_POST['uso']);
	
	

	$sql = "INSERT INTO produtos (nome, uso) VALUES ('$nome','$uso')";

	if(mysqli_query($connect, $sql)):

		$_SESSION['mensagem'] = "Cadastrado com sucesso!!!";
		header('Location: ../index.php');

	else:

		$_SESSION['mensagem'] = "Erro ao cadastrar!!!";
		header('Location: ../index.php');

	endif;

endif;