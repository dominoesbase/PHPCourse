<?php

$pessoas = array();

$pessoasAdmin = array();

$frutas = array();

// somente com um parametro adicionado 
array_push($pessoas, array(
	
	"nome" => "Jorge",
	"idade" => 24
));

array_push($pessoas, array(
	
	"nome" => "Pedro",
	"idade" => 18
));

// varios parametros adicionados no array_push
array_push($pessoasAdmin, array(
	
	"nome" => "Carlos",
	"idade" => 18
  ), array(
	
	"nome" => "Miguel",
	"idade" => 18
));

// outro caso com varios parametros adicionado no array_push

array_push($frutas, "Banana", "Laranja", "Melancia", "Sapinho tonto e gordo :)");

// EXEMPLOS A VERIFICAR NO BROWSER

// primeiro caso
echo "<pre>";
print_r($pessoas);
echo "</pre>";

// segundo caso
echo "<pre>";
print_r($pessoas[0]);
echo "</pre>";

// terceiro caso
echo "Nome: ". $pessoas[0]["nome"];

// quarto caso
echo "<pre>";
print_r($pessoasAdmin);
echo "</pre>";

// quinto caso
echo "<pre>";
print_r($frutas);
echo "</pre>";

