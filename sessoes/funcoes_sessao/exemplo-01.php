<?php 

require_once("../inc/config.php");


echo session_save_path();	

echo "<h5>Estado de uma sessao</h5>";

var_dump(session_status());

echo "</br>";

switch (session_status()) {

	case PHP_SESSION_DISABLED:
	echo "Sessoes estao desabilitadas";
	break;

	case PHP_SESSION_NONE:
	echo "Sessoes estao habilitadas mas nao existem";
	break;

	case PHP_SESSION_ACTIVE:
	echo "Sessoes estao habilitadas e parecem existir";
	break;
}









 ?>