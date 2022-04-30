<?php
  include_once 'php_action/db_connect.php';
  include_once 'includes/header.php';

  if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect,$_GET['id']);
    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
  endif;
?>

<div class="card-panel deep-purple darken-1">

<div class="row">

  

    <h3 class="ligth">Editar Cliente</h3>

      <form action="php_action/update.php" method="POST">
        <input type="hidden" name= "id" value="<?php echo $dados['id'];?> ">
        
         <div class="inut-field col s12">
          <input type="text"  name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
          <label for="nome">Nome</label>
        </div>

        <div class="inut-field col s12">
          <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>">
          <label for="sobrenome">Sobrenome</label>
        </div>

        <div class="inut-field col s12">
          <input type="text" name="email" id="email" value="<?php echo $dados['email']; ?>">
          <label for="email">Email</label>
        </div>

        <div class="inut-field col s12">
          <input type="text" name="idade" id="idade" value="<?php echo $dados['idade']; ?>">
          <label for="idade">Idade</label>
        </div>

        <div class="inut-field col s12">
          <input type="text" name="nomeanimal" id="nomeanimal" value="<?php echo $dados['nomeanimal']; ?>">
          <label for="nomeanimal">Animal</label>
        </div>

         <div class="inut-field col s12">
          <input type="text" name="telefone" id="telefone" value="<?php echo $dados['telefone']; ?>">
          <label for="telefone">Telefone</label>
        </div>

        <div class="inut-field col s12">
          <input type="text" name="cidade" id="cidade" value="<?php echo $dados['cidade']; ?>">
          <label for="cidade">Cidade</label>
        </div>

        <div class="inut-field col s12">
          <input type="text" name="endereco" id="endereco" value="<?php echo $dados['endereco']; ?>">
          <label for="endereco">Endereço</label>
        </div>

        <button type="submit" name="btn-editar" class="btn" > Atualizar </button>
        <a href="index.php" class="btn green"> Lista de Clientes </a>

      </form>

    

  

</div>

</div>
<?php
  include_once 'includes/footer.php';
?>