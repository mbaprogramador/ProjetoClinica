<?php
  include_once 'php_action/db_connectone.php';
  include_once 'includes/header.php';

  if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect,$_GET['id']);
    $sql = "SELECT * FROM clientesone WHERE id = '$id'";
    $resultadoone = mysqli_query($connect, $sql);
    $dadosone = mysqli_fetch_array($resultadoone);
  endif;
?>

<div class="card-panel deep-purple darken-1">

<div class="row">

  

    <h3 class="ligth">Editar Relatório</h3>

      <form action="php_action/updateone.php" method="POST">
        <input type="hidden" name= "id" value="<?php echo $dadosone['id'];?> ">
        
         <div class="inut-field col s12">
          <input type="text"  name="animal" id="animal" value="<?php echo $dadosone['animal']; ?>">
          <label for="animal">Animal</label>
        </div>

        <div class="inut-field col s12">
          <input type="text" name="diagnostico" id="diagnostico" value="<?php echo $dadosone['diagnostico']; ?>">
          <label for="diagnostico">Diagnóstico</label>
        </div>

        <div class="inut-field col s12">
          <input type="text" name="medicamento" id="medicamento" value="<?php echo $dadosone['medicamento']; ?>">
          <label for="medicamento">Medicamento</label>
        </div>

        <div class="inut-field col s12">
          <input type="text" name="vacina" id="vacina" value="<?php echo $dadosone['vacina']; ?>">
          <label for="vacina">Vacinar?</label>
        </div>

        <div class="inut-field col s12">
          <input type="text" name="tipovacina" id="tipovacina" value="<?php echo $dadosone['tipovacina']; ?>">
          <label for="tipovacina">Tipo de vacina</label>
        </div>

        

        <button type="submit" name="btn-editar" class="btn" > Atualizar </button>
        <a href="index.php" class="btn green"> Lista de Clientes </a>

      </form>

    

  
