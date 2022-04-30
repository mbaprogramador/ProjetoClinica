
<?php

  
  include_once 'php_action/db_connect.php';
  include_once 'includes/header.php';
  include_once 'includes/message.php';
?>

<div class="card-panel deep-purple darken-1">
            

<div class="row">

  <div class="col s12 m6 push-m3">

    <h3 class="ligth">Clínica Veterinária Mundo Animal</h3>

    <a href="adicionar.php" class="btn">Adicionar Cliente</a>
    <a href="adicionarproduto.php" class="btn">Adicionar Produto</a>
    


    <h4 class="ligth">Pacientes cadastrados</h4>
    <table class="striped">

      <thead>

        <tr>
          <th>Nome:</th>
          <th>Sobrenome:</th>
          <th>Email:</th>
          <th>Idade:</th>
          <th>Animal:</th>
          <th>Telefone:</th>
          <th>Cidade:</th>
          <th>Endereço:</th>
        </tr>
        
      </thead>

      <tbody>

        <?php

          $sql= "SELECT * FROM clientes";
          $resultado = mysqli_query($connect, $sql);

          if(mysqli_num_rows($resultado) > 0):


          while($dados = mysqli_fetch_array($resultado)):

        ?>  
        
        <tr>
          <td><?php echo $dados['nome']; ?></td>
          <td><?php echo $dados['sobrenome']; ?></td>
          <td><?php echo $dados['email']; ?></td>
          <td><?php echo $dados['idade']; ?></td>
          <td><?php echo $dados['nomeanimal']; ?></td>
          <td><?php echo $dados['telefone']; ?></td>
          <td><?php echo $dados['cidade']; ?></td>
          <td><?php echo $dados['endereco']; ?></td>
          <td><a href="editar.php?id= <?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

          <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red  modal-trigger"><i class="material-icons">delete</i></a></td>

          <td><a href="relatorio.php" class="btn">Consulta</a></td>

          <div id="modal<?php echo $dados['id']; ?>" class="modal">
            <div class="modal-content">
            <h4>Atenção!!!</h4>
            <p>Realmente deseja excluir o cliente?</p>
            </div>
              <div class="modal-footer">
              

              <form action="php_action/delete.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                <button type="submit" name="btn-deletar" class="btn red">Sim, quero excluir o cliente.</button>
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
              </form>


              </div>
          </div>

        </tr>

        <?php 
          endwhile; 
          else:
        ?>

        <tr>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
        </tr>

        <?php
          endif;
        ?>

      </tbody>

    </table>
    <br>

    
    
  </div>

</div>
</div>

<div class="card-panel teal lighten-2">

<?php
  include_once 'includes/footer.php';
?>

</div>













<?php

  
  include_once 'php_action/db_connectone.php';
  include_once 'includes/header.php';
  include_once 'includes/message.php';
?>

<div class="card-panel deep-purple darken-1">
            

<div class="row">

  <div class="col s12 m6 push-m3">

    


    <h4 class="ligth">Relatório Médico: Pacientes consultados</h4>
    <table class="striped">

      <thead>

        <tr>
          <th>Animal:</th>
          <th>Diagnóstico:</th>
          <th>Medicamento:</th>
          <th>Vacinar?</th>
          <th>Tipo de vacina:</th>
          
        </tr>
        
      </thead>

      <tbody>

        <?php

          $sql= "SELECT * FROM clientesone";
          $resultadoone = mysqli_query($connect, $sql);

          if(mysqli_num_rows($resultadoone) > 0):


          while($dadosone = mysqli_fetch_array($resultadoone)):

        ?>  
        
        <tr>
          <td><?php echo $dadosone['animal']; ?></td>
          <td><?php echo $dadosone['diagnostico']; ?></td>
          <td><?php echo $dadosone['medicamento']; ?></td>
          <td><?php echo $dadosone['vacina']; ?></td>
          <td><?php echo $dadosone['tipovacina']; ?></td>
          
           <td><a href="editarone.php?id= <?php echo $dadosone['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
           

          

          

          
              
          </div>

        </tr>

        <?php 
          endwhile; 
          else:
        ?>

        <tr>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          
        </tr>

        <?php
          endif;
        ?>

      </tbody>

    </table>
    <br>

    
    
  </div>

</div>
</div>

<div class="card-panel teal lighten-2">

<?php
  include_once 'includes/footer.php';
?>

</div>





<?php

  
  include_once 'php_action/db_connectdois.php';
  include_once 'includes/header.php';
  include_once 'includes/message.php';
?>

<div class="card-panel deep-purple darken-1">
            

<div class="row">

  <div class="col s12 m6 push-m3">

    


    <h4 class="ligth">Produtos disponíveis</h4>
    <table class="striped">

      <thead>

        <tr>
          <th>Nome:</th>
          <th>Indicação:</th>
          
          
        </tr>
        
      </thead>

      <tbody>

        <?php

          $sql= "SELECT * FROM produtos";
          $resultadodois = mysqli_query($connect, $sql);

          if(mysqli_num_rows($resultadodois) > 0):


          while($dadosdois = mysqli_fetch_array($resultadodois)):

        ?>  
        
        <tr>
          <td><?php echo $dadosdois['nome']; ?></td>
          <td><?php echo $dadosdois['uso']; ?></td>
          
          
           <td><a href="editarproduto.php?id= <?php echo $dadosdois['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
           

          

          

          
              
          </div>

        </tr>

        <?php 
          endwhile; 
          else:
        ?>

        <tr>
          <td>-</td>
          <td>-</td>
          
          
        </tr>

        <?php
          endif;
        ?>

      </tbody>

    </table>
    <br>

    
    
  </div>

</div>
</div>

<div class="card-panel teal lighten-2">

<?php
  include_once 'includes/footer.php';
?>

</div>