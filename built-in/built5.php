<?php

// fopen() ファイルを操作する。'w'で書き込みモード
// names.txtがなければ作ってくれる
// ファイルポインタと呼ばれる特殊な変数を返してくれるので$fpで受ける
// あとはファイルポインタを介してファイル操作を行う
// $fp = fopen('names.txt', 'w');
// 'a'はappendで更新ではなく追記していく
$fp = fopen('names.txt', 'a');

fwrite($fp, "jiro\n");
fwrite($fp, "saburo\n");


// fwrite() 値を書き込む
fwrite($fp, "taro\n");
// fclose() 書き込み終了
fclose($fp);
