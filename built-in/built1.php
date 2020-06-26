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