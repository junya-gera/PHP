<?php

function showAd($message = 'Ad') // デフォルト値
{
  echo '--------'.PHP_EOL;
  echo '---' . $message . '---'.PHP_EOL;
  echo '--------'.PHP_EOL;

}

showAd('Header Ad');
echo 'kudo is great!'.PHP_EOL;
showAd('Footer Ad');


$rate = 1.1; // グローバルスコープ

function sum($a, $b, $c) {
  // global $rate; 関数の外で定義された変数を使う場合はglobalをつける。
  // ただ、ややこしいので関数の中で定義するか引数を使った方がいい

  $rate = 1.08; // ローカル変数。この関数の中でしか使えない
  return ($a + $b + $c) * $rate;
}

// 無名関数。関数の結果を$sumに代入している
$sum = function ($a, $b, $c) {
  return ($a + $b + $c);
}; // :が必要

echo sum(100,200,300) + sum(10,20,30) .PHP_EOL;
echo $sum(100,200,300) + $sum(10,20,30) .PHP_EOL;

// 強い型付け これで'4'と4を区別する
declare(strict_types=1);

// 弱い型付け 引数に入れるデータ型を指定する
// ただし、このままだと'4'を入れてもintとして解釈する
// ?string と書くとstringかnull
// 返り値の型を指定する場合は()の後に書く。返り値がなければvoid
function showInfo(?string $name, int $score): void
{
  echo $name . ':' . $score .PHP_EOL;
}

showInfo('taguchi','20');