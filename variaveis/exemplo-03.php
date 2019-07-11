<?php

//////////////////////////////
// TIPOS BASICOS

$nome = "HCode";
$site = "www.hcode.com.br";

$ano = 1990;

$salario = 5500.99;

$bloqueado = false;

//////////////////////////////

// TIPOS COMPOSTOS

$frutas = array("abacaxi", "laranja", "manga");

echo $frutas[2] . "</br>";

$nascimento = new DateTime();

var_dump($nascimento);

echo "</br>";

//////////////////////////////

//TIPOS ESPECIAIS

$arquivo = fopen("exemplo-03.php", "r");

var_dump($arquivo);

$nulo = NULL;
$vazio = "";
echo "</br>";

//////////////////////////////


