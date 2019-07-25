<?php

  //////////////////////////////
  // ESCOPO DE UMA VARIAVEL

  $nome = "Jorge";
  $idade = 12;
  $valorNumerico = 17;

  function print_nome() {
 	global $nome;
  	echo $nome;
  }

  function print_idade() {
  	global $idade;
  	echo $idade;
  }

  print_nome();
  echo '</br>'; 
  print_idade();
  echo '</br>';

  // exemplo adicional e importante

  function valor($valorNumerico) {
  	global $valorNumerico;
  	echo $valorNumerico++;
  }

  function valor2($valorSapinho) {
  	global $valorSapinho;
  	unset($valorSapinho);
  }

  function valor3($valorSapinho) {
  	global $valorSapinho;
  	unset($valorSapinho);
  	echo $valorSapinho;
  }

  // parte 1
  $valorNumerico = 17;
  valor(19);
  echo '</br>';


  // parte 2
  $valorSapinho = 19;
  valor2($valorSapinho);
  echo $valorSapinho;

  // parte 3
  valor3($valorSapinho);  


?>