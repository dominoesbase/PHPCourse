<?php 

// duvida sobre organograma


$hierarquia = array(
					array(
						"nome_cargo" => "CEO"
					)
);


function exibir($cargos) {

	$html = "<ul>";




	foreach($cargos as $cargo) {

		$html .= "<li>";



	}




	$html .= "<ul>"


	return $html;

}


exibir($hierarquia);




 ?>