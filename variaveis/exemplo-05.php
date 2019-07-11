<?php

 //////////////////////////////
 // ACONSTRUCAO EXEMPLO SISTEMA DE LOGS PARA LOGIN (Exemplo bastante elementar)

  if(isset($_GET["nome"])) {

  	echo date_format(new DateTime(), 'Y-m-d H:i:s') . " [ IP: " . $_SERVER["REMOTE_ADDR"] . " ### LOCAL ACCESS: " . $_SERVER["SCRIPT_NAME"] . " ]";

  }
  else {
  	echo "O nome nao esta associado!";
  }
  





?>