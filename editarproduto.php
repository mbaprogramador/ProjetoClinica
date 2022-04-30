<?php
  include_once 'php_action/db_connectdois.php';
  include_once 'includes/header.php';


if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect,$_GET['id']);
    $sql = "SELECT * FROM produtos WHERE id = '$id'";
    $resultadodois = mysqli_query($connect, $sql);
    $dadosdois = mysqli_fetch_array($resultadodois);
  endif;
?>

<div class="card-panel deep-purple darken-1">

<div class="row">

  

    <h3 class="ligth">Editar Produto</h3>

      <form action="php_action/updateproduto.php" method="POST">
        <input type="hidden" name= "id" value="<?php echo $dadosdois['id'];?> ">
        
         <div class="inut-field col s12">
          <input type="text"  name="nome" id="nome" value="<?php echo $dadosdois['nome']; ?>">
          <label for="nome">Nome</label>
        </div>

        <div class="inut-field col s12">
          <input type="text" name="uso" id="uso" value="<?php echo $dadosdois['uso']; ?>">
          <label for="uso">Indicação</label>
        </div>

        

        

        <button type="submit" name="btn-editar" class="btn" > Atualizar </button>
        <a href="index.php" class="btn green"> Lista de Clientes </a>

      </form>

    

  
