<?php

$separator = DIRECTORY_SEPARATOR;

$elements = array();

$userGroups = array();

$access = false;

if(isset($_POST['access'])) {
	$stringAccess = $_POST['access'];
	$access = true;
}

if($access) {

	$stringReplaceCaracteres = str_replace("º", "SSSSSS", $stringAccess);

	$stringAccessExplode = explode("\n", $stringReplaceCaracteres);
		
	unset($stringAccessExplode[0], $stringAccessExplode[1], $stringAccessExplode[2]);

}	

foreach ($stringAccessExplode as $index => $properties) {

	if (strpos($properties, ":") !== false) {

		if(strpos($properties, "Staffid") !== false ) {

			$position = strpos($properties, ":");
			$elements[substr($properties, 0, $position)] = substr($properties, $position + 1);

		} else if(strpos($properties, "Nome Preferido") !== false ) {

			$position = strpos($properties, ":");
			$elements[substr($properties, 0, $position)] = substr($properties, $position + 1);

		}  else if(strpos($properties, "Nome Completo") !== false ) {

			$position = strpos($properties, ":");
			$elements[substr($properties, 0, $position)] = substr($properties, $position + 1);
			
		} else if(strpos($properties, "Login") !== false ) {

			$position = strpos($properties, ":");
			$elements[substr($properties, 0, $position)] = str_replace("HBA$separator", "", substr($properties, $position + 1));
			
		} else if(strpos($properties, "Função") !== false ) {

			$position = strpos($properties, ":");
			$elements[substr($properties, 0, $position)] = substr($properties, $position + 1);
			
		} else if(strpos($properties, "Serviço") !== false ) {

			$position = strpos($properties, ":");
			$elements[substr($properties, 0, $position)] = substr($properties, $position + 1);
			
		} else if(strpos($properties, "Categoria Profissional") !== false ) {

			$position = strpos($properties, ":");
			$elements[substr($properties, 0, $position)] = substr($properties, $position + 1);
			
		} else if(strpos($properties, "Email") !== false ) {

			$position = strpos($properties, ":");
			$elements[substr($properties, 0, $position)] = substr($properties, $position + 1);
			
		} else if(strpos($properties, "Nº Da Ordem") !== false ) {

			$position = strpos($properties, ":");
			$elements[substr($properties, 0, $position)] = substr($properties, $position + 1);
			
		} else if(strpos($properties, "Especialidade :") !== false) {

			$elements[substr($properties, 0, $position)] = str_replace(" ", "", $stringAccessExplode[$index + 1]);

		} else if(strpos($properties, "Linha Assistencial :") !== false) {

			$elements[substr($properties, 0, $position)] = str_replace(" ", "", ($stringAccessExplode[$index + 1]));

		} 
	}

	if (substr($properties, 0,7) === "NSSSSSS" && strpos($properties, "NSSSSSS mecanográfico") === false && strpos($properties, "NSSSSSS Da") === false) {
		array_push($userGroups, $properties);
	}


}









