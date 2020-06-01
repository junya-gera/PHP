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