<?php

$frase = "A repetição é mãe da retenção";
$palavra = "mãe";
$posicaoPalavraMae = strpos($frase, $palavra);
$texto = substr($frase, $posicaoPalavraMae + strlen($palavra), strlen($frase));
echo $texto;

?>