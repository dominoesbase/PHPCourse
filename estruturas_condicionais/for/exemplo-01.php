<?php

echo '<h6>Mostrar todos os números de 0 a 9</h6>';

for ($i = 0; $i < 10; $i++) {
  echo $i . '</br>';
}


echo '<h6>Mostrar todos os números múltiplos de 5 até 100</h6>';

for ($i = 5; $i <= 100; $i+=5) {
  echo $i . '</br>';
}

echo '<h6>Mostrar todos os números múltiplos de 3 até 1000 exepto entre 200 e 350</h6>';

for ($i = 3; $i <= 1000; $i+=3) {

  if ($i >= 200 && $i <= 350) continue;

  echo $i . '</br>';

}

echo '<h6>Mostrar todos os número até 1000. Não! Interrompe no 10º número!</h6>';

for ($i = 3; $i <= 1000; $i++) {

  if ($i === 10) {
    echo 'Loop interrompido!';
    break;
  }

  echo $i . '</br>';

}
?>
