<?php

$scores = [30,40,50];

array_unshift($scores, 10, 20); // 先頭に挿入
array_push($scores, 60, 70); // 末尾に挿入
$scores[] = 80; // 一つだけ末尾に挿入
array_shift($scores); // 先頭1つを削除
array_pop($scores); // 末尾1つを削除
print_r($scores);


// array_slice() 配列から要素を切り出して別の配列に格納
$partial = array_slice($scores, 2);

print_r($scores);
print_r($partial);

// array_splice() 配列の2番目から3つを削除
// array_sliceとは違い元の配列を変更する（破壊的）
array_splice($scores, 2, 3);  // 20,30,70
// 配列の2番目から0個削除し100,101を挿入
array_splice($scores, 2, 0, [100, 101]);
print_r($scores);


sort($scores);  // 小さい順
print_r($scores);
rsort($scores); // 大きい順
print_r($scores);
shuffle($scores); // シャッフル
print_r($scores);
// シャッフルして2個をランダムにチョイス
$picked = array_rand($scores, 2);
// $pickedだけだとキーが表示される。値を表示するには以下にする
echo $scores[$picked[0]] . PHP_EOL;
