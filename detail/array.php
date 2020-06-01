<?php

$scores = [
'first'  => 90,
'second' => 40,
'third'  => 100]
;

// 配列の中身をわかりやすく表示
var_dump($scores);
print_r($scores);
echo $scores['first'] .PHP_EOL;

foreach ($scores as $key => $score) {
  echo $key . ':' . $score .PHP_EOL;
}

function getStats(...$numbers){  // 可変長引数
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  return [$total, $total / count($numbers)]; //複数の返り値
}

// 複数の返り値を受け取りそれぞれ変数に代入
// list($sum,$average) = getStats(1,2,3,4,5,6,7,8,9,10);
[$sum,$average] = getStats(1,2,3,4,5,6,7,8,9,10);
echo $sum .PHP_EOL;
echo $average .PHP_EOL;