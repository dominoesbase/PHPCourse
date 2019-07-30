<?php

$valor1 = 2;
$valor2 = 5;

echo $valor1 ** $valor2;
echo "</br>";

/////////////////////////////////////////////


$valorInt1 = 5;
$valorInt2 = 05;
$valorString1 = "05";
$valorString2 = "5";

echo var_dump($valorInt1 == $valorInt2);
echo "</br>"; 

echo var_dump($valorInt1 == $valorString2);
echo "</br>"; 

echo var_dump($valorString1 === $valorString2);
echo "</br>"; 

echo var_dump($valorInt1 === $valorInt2);
echo "</br>"; 

/////////////////////////////////////////////

$idadePedro = 19;
$idadeCarlos = 21;

echo $idadePedro <=> $idadeCarlos;
echo "</br>"; 


/////////////////////////////////////////////

$nomeCao = NULL;
$nomeGato = NULL;
$nomeSapinho = "Tonto e Gordo";

echo $nomeCao ?? $nomeGato ?? $nomeSapinho;
echo "</br>"; 


/////////////////////////////////////////////

$nomeCasa = NULL;
$nomePraia = NULL;
$marcaCarro = NULL;

$valorUsado = $nomeCasa ?? $nomePraia ?? $marcaCarro;

if(isset($valorUsado)) {
	echo "Valor usado para pesquisa: $valorUsado";
	echo "</br>"; 
} 
else {
	echo "Não foi usado qualquer valor válido para pesquisa! :(";
	echo "</br>"; 
}


/////////////////////////////////////////////

$idadeJorge = 21;
echo $idadeJorge++;
echo "</br>"; 
echo $idadeJorge;
echo "</br>"; 

/////////////////////////////////////////////

$idadeJorge = 21;
echo ++$idadeJorge;
echo "</br>"; 

/////////////////////////////////////////////

