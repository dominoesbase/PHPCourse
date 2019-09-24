<?php

$json = '[{"nome":"Jorge","idade":21},{"nome":"Miguel","idade":22}]';

$dataArray = json_decode($json, true);

$dataObject = json_decode($json, false);

echo '<h6>Caso em que o decode transforma num array</h6>';

var_dump($dataArray);

echo '<h6>Caso em que o decode transforma num objeto</h6>';

var_dump($dataObject);


