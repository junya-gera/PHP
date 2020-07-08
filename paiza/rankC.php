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