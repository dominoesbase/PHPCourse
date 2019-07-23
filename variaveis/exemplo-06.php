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
  	echo ++$valorNumerico;
  }

  valor(19);


?>