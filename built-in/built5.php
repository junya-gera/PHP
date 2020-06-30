<?php

// fopen() ファイルを操作する。'w'で書き込みモード
// names.txtがなければ作ってくれる
// ファイルポインタと呼ばれる特殊な変数を返してくれるので$fpで受ける
// あとはファイルポインタを介してファイル操作を行う
// $fp = fopen('names.txt', 'w');
// 'a'はappendで更新ではなく追記していく
// $fp = fopen('names.txt', 'a');

// fwrite($fp, "jiro\n");
// fwrite($fp, "saburo\n");


// fwrite() 値を書き込む
// fwrite($fp, "taro\n");

// 'r'は読み込み
// $fp = fopen('names.txt', 'r');
// fread() サイズを指定して一気に読みこむ
// $contents = fread($fp, filesize('names.txt'));

// fgets() 1行ずつ読み込む。読み込む行がなくなったらfalseを返す
// while (($line = fgets($fp)) !== false){
//   echo $line;
// }
// fclose() 書き込み終了
// fclose($fp);
// echo $contents;


$contents = "taro\njuro\nsaburo\n";
// fopen以外のファイル書き込み
file_put_contents('names.txt', $contents);
$contents = file_get_contents('names.txt');
echo $contents;