<?php

$score = 87;
$name = 'kudo';

if ($score >= 80 && $name === 'kudo') {
  echo 'Great!' .PHP_EOL;
} elseif($score >= 60) {
  echo 'Good!' .PHP_EOL;
}
else {
  echo 'OK!' . PHP_EOL;
}

$signal = 'pink';

switch($signal){
  case 'red':
    echo 'Stop!' .PHP_EOL;
    break;

  case 'ywllow':
    echo 'Good!' .PHP_EOL;
    break;

  case 'blue':
  case 'green':
    echo 'Go!' .PHP_EOL;
    break;
    
  default:
  echo 'Wrong signal!' .PHP_EOL;
  break;
}