<?php 

$dados = array(
	"nome" => "Jorge",
	"idade" => 51
);

foreach($dados as &$value) {

	if(gettype($value) === "integer") {
		$value+=10;
	}
}

var_dump($dados);










 ?>