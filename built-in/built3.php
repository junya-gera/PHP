<?php

// array_fill 0から5個分を10で埋める
// $scores = array_fill(0, 5, 10);
// 1~10までの値を2刻みで配列を作る 
$scores = range(1, 10, 2);
print_r($scores);

echo array_sum($scores) . PHP_EOL; // 配列の合計
echo max($scores) . PHP_EOL; // 最大
echo min($scores) . PHP_EOL; // 最小
echo array_sum($scores) / count($scores) . PHP_EOL; // 配列の平均


$a = [3, 4, 8];
$b = [4, 8, 12];

$merged = array_merge($a, $b); // array_merge() 配列の結合
print_r($merged);

$uniques = array_unique($merged); // array_unique() 配列から重複をなくす
print_r($uniques);

$diff1 = array_diff($a, $b); // aからbにある要素を引く
print_r($diff1); // 3

$common = array_intersect($a, $b); // aとbの共通のもの
print_r($common);


$prices = [100, 200, 300];
// array_map() 配列全てに同じ処理を行って別の配列に格納
$newPrices = array_map(
  function($n){ return $n * 1.1; },
  $prices
);
print_r($newPrices);


$numbers = range(1, 10);
// array_filter() 条件にtrueのものを集めて配列を作る
$eventNumbers = array_filter(
  $numbers, // array_map()とは逆で先に配列を書く
  function ($n) {
    return $n % 2 === 0;
  }
);
print_r($eventNumbers);


$points = [
  'sirogane' => 80,
  'kaguya' => 70,
  'cika' => 60,
];

$keys = array_keys($points);  // キーのみ配列
print_r($keys);
$values = array_values($points); // 値のみ配列
print_r($values);
// array_key_exists() キーがあるか調べる
if (array_key_exists('kaguya', $points) === true){
  echo 'kaguya is here!' . PHP_EOL; 
}
// in_array() 値があるか調べる
if (in_array(80, $points) === true){
  echo '80 is here!' . PHP_EOL;
}
// array_search() 値を検索して対応する値を返す
echo array_search(60, $points) . PHP_EOL;