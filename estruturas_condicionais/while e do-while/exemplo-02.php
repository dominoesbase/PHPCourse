<?php

$precoProduto = 500;
$desconto = 0.90;
$contador = 0;


do {

  $contador++;

  $precoProduto *= $desconto;

  // VERIFICAR AS DIVERSAS ITERACOES
  echo "Preco da iteracao $contador: $precoProduto</br>";

} while ($precoProduto > 250);
