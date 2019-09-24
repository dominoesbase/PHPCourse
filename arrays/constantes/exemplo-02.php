<?php


define("BANCO_DE_DADOS", [
		"127.0.0.1",
		"root",
		"password",
		"test"
], true);

echo "<h6>Caso sem True no Define</h6>";

print_r(BANCO_DE_DADOS);

print_r(banco_DE_DaDoS); // devido ao true colocado no define