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