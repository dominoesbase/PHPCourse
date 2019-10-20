<?php 

$estadoSessao = array(
		"DISABLED" => PHP_SESSION_DISABLED,
		"NONE" => PHP_SESSION_NONE,
		"ACTIVE" => PHP_SESSION_ACTIVE
);


foreach ($estadoSessao as $index => $estado) {
	echo "A <strong>$index</strong> corresponde o <strong>valor inteiro $estado</strong></br>";
}

?>