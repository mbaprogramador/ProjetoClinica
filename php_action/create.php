<?php 

session_start();

require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):

	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$idade = mysqli_escape_string($connect, $_POST['idade']);
	$nomeanimal = mysqli_escape_string($connect, $_POST['nomeanimal']);
	$telefone = mysqli_escape_string($connect, $_POST['telefone']);
	$cidade = mysqli_escape_string($connect, $_POST['cidade']);
	$endereco = mysqli_escape_string($connect, $_POST['endereco']);

	$sql = "INSERT INTO clientes (nome, sobrenome, email, idade, nomeanimal, telefone, cidade, endereco) VALUES ('$nome', '$sobrenome', '$email', '$idade', '$nomeanimal', '$telefone', '$cidade', '$endereco')";

	if(mysqli_query($connect, $sql)):

		$_SESSION['mensagem'] = "Cadastrado com sucesso!!!";
		header('Location: ../index.php');

	else:

		$_SESSION['mensagem'] = "Erro ao cadastrar!!!";
		header('Location: ../index.php');

	endif;

endif;