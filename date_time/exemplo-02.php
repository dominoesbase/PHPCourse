<?php 

$ts = strtotime("2001-09-11");

echo date("l, d/m/Y H:i:s", $ts) . "</br>";

echo strtotime("now");

echo "</br>";

echo date("l, d/m/Y H:i:s", strtotime("now"));

echo "</br>";

echo strtotime("+1 week");

echo "</br>";

echo date("l, d/m/Y H:i:s", strtotime("+1 week"));

echo "</br>";





 ?>