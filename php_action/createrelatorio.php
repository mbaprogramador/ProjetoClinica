<?php 

session_start();

require_once 'db_connectone.php';

if(isset($_POST['btn-cadastrar'])):

	$animal = mysqli_escape_string($connect, $_POST['animal']);
	$diagnostico = mysqli_escape_string($connect, $_POST['diagnostico']);
	$medicamento = mysqli_escape_string($connect, $_POST['medicamento']);
	$vacina = mysqli_escape_string($connect, $_POST['vacina']);
	$tipovacina = mysqli_escape_string($connect, $_POST['tipovacina']);
	

	$sql = "INSERT INTO clientesone (animal, diagnostico, medicamento, vacina, tipovacina) VALUES ('$animal','$diagnostico', '$medicamento', '$vacina', '$tipovacina')";

	if(mysqli_query($connect, $sql)):

		$_SESSION['mensagem'] = "Cadastrado com sucesso!!!";
		header('Location: ../index.php');

	else:

		$_SESSION['mensagem'] = "Erro ao cadastrar!!!";
		header('Location: ../index.php');

	endif;

endif;