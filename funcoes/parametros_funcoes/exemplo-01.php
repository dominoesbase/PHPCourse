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

function dados($nome, $idade = 18) {

	return "Nome: $nome ||| Idade: $idade </br>";

}

echo dados("Jorge", 90);
echo dados("Jorge","");

function dadosPrivados($nome = "Nao Definido", $idade = 18, $motivo) {

	return "NOME: $nome ||| IDADE: $idade ||| MOTIVO: $motivo";

}

//echo dadosPrivados("Nao existe motivo para colocar");

echo dadosPrivados("Jorge", 19, "Motivo ainda esta por apurar");


 ?>