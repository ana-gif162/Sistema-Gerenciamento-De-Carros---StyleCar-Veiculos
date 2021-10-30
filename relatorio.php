<?php

include_once 'php_action/db_connect.php';

include_once 'includes/header.php';
?>

<div class="selection no-pad-bot" id="index-banner">
  <div class="container">
    </br>
    <div class="row center">
      <div class="col s12 m12 l12 xl12">
        <form action="php.action/report.php"target="_black" method="POST">
          <div class="col s6">
          <label for="marca">Selecionar Marca:</label>
          <select name="marcaselecionada">
            <option>Todas As Marcas</option>
            <?php
            $sql = "SELECT DISTINCT marca FROM estoque";
            $resultado = mysqli_query($connect, $sql);
            while ($dados = mysqli_fetch_array($resultado)) :
            ?>
            <option><?php echo $dados['marca';] ?></option>
            <?php endwhile; ?>
          </select>
          </div>
          <div class="col s6">
            <input type="submit" name="btn-relatorio" class="btn orange" value="selecionar">
          </div>
        </form>
      </div>
    </div>
    </br>
  </div>
</div>

<?php

include_once 'includes/footer.php';

?>