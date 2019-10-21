<?php 

function soma(int ...$valores) {

	return array_sum($valores);

}

echo soma(3, 4.5, 2, 55.5) . "</br>";

function somaTotal(float ...$valores):string {

	return array_sum($valores);

}

echo var_dump(somaTotal(3, 4, 4.5, 7.8));


 ?>