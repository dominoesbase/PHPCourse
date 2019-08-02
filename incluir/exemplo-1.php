<?php

include "inc/data.php";
require "inc/form.php";

// devolver a data de hoje e mostrar para o utilizador
echo "Hoje é dia " . data_atual() . " !";
echo "</br>";

// teste simples para a chamada do ficheiro form.php

echo testar_chamada_form();

