<?php

$qualASuaIdade = 125;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {

    echo "Criança";

} else if ($qualASuaIdade < $idadeMaior) {

    echo "Adolescente";

} else if ($qualASuaIdade < $idadeMelhor) {

    echo "Adulto";

} else if ($qualASuaIdade < 100) {

    echo "Recebeu um Prémio!";
    echo "</br>";

} else if ($qualASuaIdade > 100) {

    echo "Centenário! Parabéns!";
    echo "</br>";

} else {

    echo "Idoso";

}

echo "</br>";



?>
