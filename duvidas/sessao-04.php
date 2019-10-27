// para verificar a duvida do switch

$a = 2;

switch($a) {

case 2:
    echo "sapinho_1";

case 3:
    echo "sapinho_2";

case 4:
    echo "sapinho_3";

case 5:
    echo "sapinho_4";

}

echo "</br>";

// duvida relativa a arrays constantes

define("ACESSOS", ["127.0.0.1", "user", "password"], true);

echo ACESSOS[0];
