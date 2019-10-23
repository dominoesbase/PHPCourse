<?php 

// Duvida relativa a situacao do scope

$a = 10;


function somaValor() {

	global $a;

	$a = $a + 10;

	return $a;

}


echo somaValor() . "</br>";

echo $a . "</br>";


// Duvida relativa a situacao do unset

function eliminarVariavel() {

	 global $a;
	 unset($a);

}

eliminarVariavel();

echo $a . "</br>";


// Duvida sobre Foreach


$produtos = array(
				array(
					array(
						array(
							"nome_produto" => "morango",
							"data_validade" => "17/12/2020"
						)	
					)
				)
);


$marcas = array(
			array(
				"nome_marca" => "Sapinho",
				"codigo_produto" => "SAP01"
			)
);


foreach($produtos as $produto) {

	echo "Nome Produto: " . $produto["nome_produto"] . " Validade: " . $produto["data_validade"] . "</br>"; 

}


foreach($marcas as $marca) {

	echo "Nome Produto: " . $marca["nome_marca"] . " Validade: " . $marca["codigo_produto"] . "</br>"; 
	
}

// Duvida sobre Date e Time

echo date("d/m/Y H:i:s", time());
echo "<br>";
echo time();
echo "<br>";


 ?>