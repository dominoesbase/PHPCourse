<form>

  <input type="text" name="nome">
  <input type="date" name="nascimento">
  <input type="submit" value="Submeter!">

</form>
<?php
if (isset($_GET)) {
  foreach ($_GET as $key => $value) {

      echo 'Nome do Campo: ' . $key . '<br>';

      echo 'Valor do Campo: ' . $value . '<br>';

      echo '<hr>';
  }
} else {
  echo '<h6 style="color: red">Introduza um valor válido no formulário</h6>';
}

?>
