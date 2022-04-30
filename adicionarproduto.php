<?php
  include_once 'includes/header.php';
?>

<div class="card-panel deep-purple darken-1">

<div class="row">

  <div class="col s12 m6 push-m3">

    <h3 class="ligth">Novo Produto</h3>

      <form action="php_action/createproduto.php" method="POST">
        
        <div class="inut-field col s12">
          <input type="text" name="nome" id="nome">
          <label for="nome">Nome</label>
        </div>

        <div class="inut-field col s12">
          <input type="text" name="uso" id="uso">
          <label for="uso">Indicação</label>
        </div>

        

        <button type="submit" name="btn-cadastrar" class="btn" > Cadastrar </button>
        <a href="index.php" class="btn green" > Lista de Clientes </a>



      </form>

    

  </div>

</div>

</div>
<?php
  include_once 'includes/footer.php';
?>