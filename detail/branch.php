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

for ($i = 1; $i <= 5; $i++) {
  // if ( $i % 2 === 0){
  //   continue;
  // }
  if ( $i === 4){
  break;
  }
  echo "$i Hello" .PHP_EOL;
}

$hp = -100;

// while ($hp > 0) {
//   echo "Your HP : $hp" . PHP_EOL;
//   $hp -= 15;
// }

do {  // 1度はdoを実行し、その後whileの条件を調べる
  echo "Your HP : $hp" . PHP_EOL;
  $hp -= 15;

} while ($hp > 0);