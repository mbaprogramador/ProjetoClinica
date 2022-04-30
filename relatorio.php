<?php
  include_once 'includes/header.php';
?>

<div class="card-panel deep-purple darken-1">

<div class="row">

  <div class="col s12 m6 push-m3">

    <h3 class="ligth">Relatório Médico</h3>


      <form action="php_action/createrelatorio.php" method="POST">

          <div class="inut-field col s12">
          <input type="text" name="animal" id="animal">
          <label for="animal">Animal</label>
          </div>

          <div class="inut-field col s12">
          <input type="text" name="diagnostico" id="diagnostico">
          <label for="diagnostico">Diagnóstico</label>
          </div>

          <div class="inut-field col s12">
          <input type="text" name="medicamento" id="medicamento">
          <label for="medicamento">Medicamento</label>
          </div>

          <div class="inut-field col s12">
          <input type="text" name="vacina" id="vacina">
          <label for="vacina">Vacinar?</label>
          </div>

          <div class="inut-field col s12">
          <input type="text" name="tipovacina" id="tipovacina">
          <label for="tipovacina">Tipo de vacina</label>
          </div>
          
          
        
        

        <button type="submit" name="btn-cadastrar" class="btn" > Gerar Relatório </button>
        <a href="index.php" class="btn green" > Lista de Clientes </a>



      </form>

    

  </div>

</div>

</div>
<?php
  include_once 'includes/footer.php';
?>