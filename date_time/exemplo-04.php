<?php 

$dt = new DateTime();

$period = new DateInterval("P15D");

echo $dt->format("l, d/m/Y H:i:s") . "</br>";

$dt->add($period);

echo $dt -> format("l, d/m/Y H:i:s");












 ?>