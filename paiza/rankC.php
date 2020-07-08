<?php

// C074 文章サイズ変更 X文字ごとに改行を入れる

$input = trim(fgets(STDIN)); // 複数行を配列に
while ($input){
  $array[] = $input;
  $input = trim(fgets(STDIN));
}
$int = explode(" ", $array[0]); // 6 8 6

array_shift($array); // 6 8 6を削除して文字列だけにする
$str = implode($array); // implode() 配列の文字列を全て繋げる
// $a = wordwrap($str,$X,"\n",true);
// echo $a;
echo chunk_split($str, $int[2]) ."\n"; // $int[2] = 6文字ごとに改行を入れる

// 最初、何文字で改行を入れるかのところを$array[0]の最後の文字にしていた。
// こうすると、2桁で改行を入れる場合におかしくなることに気づいた。


// C048 タダ飲みコーヒー 割引率をかけていって何円でタダになるか
$input_line = fgets(STDIN);
$array = explode(" ", $input_line);
$X = $array[0];
$P = $array[1];

$pay = 0;
while($X != 0){
    $pay = $pay + $X; // 支払ったお金の総額
    $X = $X - ceil($X * $P / 100);
}

echo $pay;



// C030 白にするか黒にするか 128以上なら1,127以下なら0
// 3 2
// 128 127
// 127 128
// 128 127

$input = trim(fgets(STDIN)); // 複数行を配列に
while ($input){
$array[] = $input;
$input = trim(fgets(STDIN));
}
$a = explode(" ", $array[0]);

array_shift($array);

$answer_unit = "";

foreach($array as $line){ // 行を1列ずつにする
    $units = explode(" ", $line); // 数字を1つずつ配列にする
    
    foreach($units as $unit){ // 1つずつ128以上か調べる
        if ($unit >= 128){
            $str = 1;
            $answer_unit = $answer_unit . " " . $str; // 1なら$answer_unitに結合
        } else {
            $str = 0;
            $answer_unit = $answer_unit . " " . $str; // 0なら$answer_unitに結合
        }
    }
    $answer[] = $answer_unit; // 1と0の入った列を$answerという配列に入れていく
    $answer_unit = ""; // 1と0の入った列をリセット
    
}

if ($array[0] == 0){
    echo 0;
} else {
    foreach ($answer as $key => $value) {
    echo trim($value) .PHP_EOL; // 配列のバリューだけを空白を削除して1行ずつ表示
    }
}