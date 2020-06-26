<?php

$name = 'Apple';
$score = 32.246;

// sprintf 表示の幅を設定したり、小数点以下の桁数を指定
// %s:整数 15:桁数 -:左詰
// %f:浮動小数点数 10.2:10桁、小数点以下2桁 
$info = sprintf("[%-15s][%010.2f]", $name, $score);
echo $info . PHP_EOL;

$input = 'dot_taguchi  ';
$input = trim($input); // trim() 文字列の改行や空白を除去

// 日本語を扱う場合は、マルチバイトに対応したmb_strlen(),mb_strpos()を使う
echo strlen($input) . PHP_EOL; // strlen() 文字列の文字数を調べる
echo strpos($input, '_'). PHP_EOL; // strpos() 文字列の検索

$input = str_replace('_', '-', $input); // 文字列の置換
echo $input . PHP_EOL;

$sample = '20200320Item-A  1200';
// substr_replace() 文字列の置換
$sample = substr_replace($sample, 'Item-B  ',8, 8);

// substr() 値を切り出す
$date = substr($sample, 0, 8); // 0~8桁目
$product = substr($sample, 8, 8);
$amount = substr($sample, 16); // 16桁目~最後まで

echo $date . PHP_EOL;
echo $product . PHP_EOL;
echo number_format($amount) . PHP_EOL; // number_format() 3桁ごとに,を入れる

$sample2 = 'Call us at 03-3001-1256 or 03-3015-3222';
$pattern = '/\d{2}-\d{4}-\d{4}/'; // パターンは正規表現を使う
// preg_match() 文字列の検索
// preg_match(検索したいパターン,検索したい文字列,検索した結果を格納する変数)
preg_match_all($pattern,$sample2,$matches);
print_r($matches);

// preg_replace() 文字列をパターンに応じて置換
// preg_replace(パターン,置換後の文字列,検索したい文字列)
$sample2 = preg_replace($pattern, '**-****-****', $sample2);
echo $sample2 . PHP_EOL;

$d = [2020, 11, 15];
// implode() 配列の要素を文字列に連結
echo implode('_', $d) . PHP_EOL;

$t = '17:32:45';
// explode() 文字列を:で区切って配列に格納
print_r(explode(':', $t));