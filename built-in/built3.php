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