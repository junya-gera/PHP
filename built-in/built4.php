<?php

$data = [ // 配列の中に配列が入っている
  ['name' => 'sirogane', 'score' => 80],
  ['name' => 'kaguya',   'score' => 60],
  ['name' => 'cika',     'score' => 70],
  ['name' => 'isigami',  'score' => 60],
];

// array_column() $dataの中からscores,namesだけを配列にする
$scores = array_column($data, 'score');
$names = array_column($data, 'name');

// score,nameの両方で並べ替える。デフォルトでは小さい順
array_multisort(
  $scores, SORT_DESC, SORT_NUMERIC, // 大きい順、数値
  $names, SORT_DESC, SORT_STRING, // 大きい順、文字列
  $data
);

print_r($data);