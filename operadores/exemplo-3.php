<?php

$nome = "jorge rodrigues";

echo strtoupper($nome);
echo "</br>";
echo strtolower($nome);
echo "</br>";
echo ucwords($nome);
echo "</br>";
echo ucfirst($nome);
echo "</br>";
echo str_replace("rodrigues", "vida rodrigues", $nome);
echo "</br>";
echo $nome; // cuidado que a variavel nome nao foi modificada!
echo "</br>";
echo strpos($nome, "rodrigues");
echo "</br>";
echo substr($nome, strlen("jorge") + 1, strlen($nome)); // tentar realizar sem o +1 e vericar a diferenca :)





?>