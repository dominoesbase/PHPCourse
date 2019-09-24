<?php

$pessoas = array();

array_push($pessoas, array(

				"nome" => "Jorge",
				"idade" => 21
));

array_push($pessoas, array(

				"nome" => "Miguel",
				"idade" => 22
));

echo json_encode($pessoas);