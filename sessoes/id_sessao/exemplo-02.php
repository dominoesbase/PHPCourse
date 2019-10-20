<?php 

require_once("../inc/config.php");

$_SESSION["estabelecimento"] = "Cafetaria Rossio";
$_SESSION["dono_estabelecimento"] = "Pedro Salgado";

session_regenerate_id(); // modificacao do id esta a ser forcado

echo "<h6>Id da sessao Atual</h6>";

echo session_id() . "</br>";

echo "<h6>Verificar $_SESSION</h6>";

echo var_dump($_SESSION);






 ?>