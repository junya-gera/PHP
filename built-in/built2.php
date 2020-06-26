<?php

$scores = [30,40,50];

array_unshift($scores, 10, 20); // 先頭に挿入
array_push($scores, 60, 70); // 末尾に挿入
$scores[] = 80; // 一つだけ末尾に挿入
array_shift($scores); // 先頭1つを削除
array_pop($scores); // 末尾1つを削除
print_r($scores);