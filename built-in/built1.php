<?php

$name = 'Apple';
$score = 32.246;

// sprintf 表示の幅を設定したり、小数点以下の桁数を指定
// %s:整数 15:桁数 -:左詰
// %f:浮動小数点数 10.2:10桁、小数点以下2桁 
$info = sprintf("[%-15s][%010.2f]", $name, $score);
echo $info . PHP_EOL;

