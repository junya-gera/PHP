<?php
// D093 切りのいい番号
// 数値がゾロ目か調べる。重複を無くして配列が1つならtrue
$input_line = fgets(STDIN);
$array = str_split($input_line); // 1文字ずつ配列にする
array_pop($array); // 配列の末尾を削除 
$answer = array_unique($array); // 配列の中の重複を削除
if (count($answer) == 1){
    echo $input_line;
} else {
    echo "No";
}