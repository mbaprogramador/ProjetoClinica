<?php
  include_once 'includes/header.php';
?>

<div class="card-panel deep-purple darken-1">

<div class="row">

  <div class="col s12 m6 push-m3">

    <h3 class="ligth">Novo Cliente</h3>

      <form action="php_action/create.php" method="POST">
        
        <div class="inut-field col s12">
          <input type="text" name="nome" id="nome">
          <label for="nome">Nome</label>
        </div>

        <div class="inut-field col s12">
          <input type="text" name="sobrenome" id="sobrenome">
          <label for="sobrenome">Sobrenome</label>
        </div>

        <div class="inut-field col s12">
          <input type="text" name="email" id="email">
          <label for="email">Email</label>
        </div>

        <div class="inut-field col s12">
          <input type="text" name="idade" id="idade">
          <label for="idade">Idade</label>
        </div>

        <div class="inut-field col s12">
          <input type="text" name="nomeanimal" id="nomeanimal">
          <label for="nomeanimal">Animal</label>
        </div>

        <div class="inut-field col s12">
          <input type="text" name="telefone" id="telefone">
          <label for="telefone">Telefone</label>
        </div>

        <div class="inut-field col s12">
          <input type="text" name="cidade" id="cidade">
          <label for="cidade">Cidade</label>
        </div>

        <div class="inut-field col s12">
          <input type="text" name="endereco" id="endereco">
          <label for="endereco">Endereço</label>
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