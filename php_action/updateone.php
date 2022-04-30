<?php 

session_start();

require_once 'db_connectone.php';

if(isset($_POST['btn-editar'])):

	$animal = mysqli_escape_string($connect, $_POST['animal']);
	$diagnostico = mysqli_escape_string($connect, $_POST['diagnostico']);
	$medicamento = mysqli_escape_string($connect, $_POST['medicamento']);
	$vacina = mysqli_escape_string($connect, $_POST['vacina']);
	$tipovacina = mysqli_escape_string($connect, $_POST['tipovacina']);
	


	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE clientesone SET animal= '$animal' , diagnostico= '$diagnostico', medicamento= '$medicamento', vacina='$vacina', tipovacina='$tipovacina' WHERE id=$id";

	if(mysqli_query($connect, $sql)):

		$_SESSION['mensagem'] = "Atualizado com sucesso!!!";
		header('Location: ../index.php');

	else:

		$_SESSION['mensagem'] = "Erro ao atualizar!!!";
		header('Location: ../index.php');

	endif;

endif;