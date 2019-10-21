<?php 


function ola($texto) {

	return "Ola $texto!</br>";

}

echo ola("Jorge");
echo ola("Pedro");
echo ola("Catia");


function bomDia($texto = "SAPO") {

	return "Bom dia $texto!</br>";

}

echo bomDia();
echo bomDia(""); // valor vazio 
echo bomDia("Pedro");

function saudacao($nome = "Jorge", $periodo = "Bom dia") {

	return "$periodo, $nome!</br>";

}

echo saudacao("Pedro","Boa tarde");
echo saudacao("","");
echo saudacao("Sapinho");
echo saudacao("");











 ?>