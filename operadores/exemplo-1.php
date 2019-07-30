<?php

$nomeProprio = "Jorge";
$nomeApelido = "Rodrigues";

$nomeProprio .= " " . $nomeApelido;

echo $nomeProprio; 
echo "</br>";

/////////////////////////////////////////////

$valor1 = 2;
$valor2 = 4;
$valor2 += $valor1;

echo $valor2;
echo "</br>";

/////////////////////////////////////////////

$valorTotal = 25;
$desconto = 0.15;
$valorTotal -= ($valorTotal * $desconto);
echo $valorTotal;
echo "</br>";

?>