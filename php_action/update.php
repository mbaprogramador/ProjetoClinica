<?php 

session_start();

require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):

	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$idade = mysqli_escape_string($connect, $_POST['idade']);
	$nomeanimal = mysqli_escape_string($connect, $_POST['nomeanimal']);
	$telefone = mysqli_escape_string($connect, $_POST['telefone']);
	$cidade = mysqli_escape_string($connect, $_POST['cidade']);
	$endereco = mysqli_escape_string($connect, $_POST['endereco']);


	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE clientes SET nome= '$nome' , sobrenome= '$sobrenome', email= '$email', idade= '$idade', nomeanimal='$nomeanimal', telefone='$telefone', cidade= '$cidade', endereco= '$endereco' WHERE id=$id";

	if(mysqli_query($connect, $sql)):

		$_SESSION['mensagem'] = "Atualizado com sucesso!!!";
		header('Location: ../index.php');

	else:

		$_SESSION['mensagem'] = "Erro ao atualizar!!!";
		header('Location: ../index.php');

	endif;

endif;