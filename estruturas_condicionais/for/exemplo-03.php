<?php

echo '<h5>Escolher uma determinada data!</h5>';

echo '<select>';

for($i = date("Y"); $i >= date("Y") - 100; $i--) {

  echo '<option value="'. $i .'">'. $i .'</option>';

}

echo '</select>';
