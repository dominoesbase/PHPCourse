<?php 

// Duvida sobre organograma


$hierarquia = array(
					array(
						"nome_cargo" => "CEO"
					)
);


function exibir($cargos) {

	$html = "<ul>";

	foreach($cargos as $cargo) {

		$html .= "<li>";
		$html .= $cargo["nome_cargo"];

		if(isset($cargo["subordinados"]) && count($cargo["subordinados"]) > 0) {

			$html .= exibir($cargo["subordinados"]);

		}



		$html .= "<li>";



	}

	$html .= "<ul>"

	return $html;

}


echo exibir($hierarquia);

?>