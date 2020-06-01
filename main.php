<?php
$name = 'komarichan'; # 変数は大文字と小文字を区別する
echo 'Hello ' . $name .PHP_EOL;
echo 'Hi ' . $name .PHP_EOL;
echo "$name kawaii" .PHP_EOL; #""の中なら変数を呼び出せる

echo 2 + '3'; // 数字っぽい文字列を数字として解釈してくれる

// 定数はdefineを使う。大文字で、$がつかない
define('NAME', 'kudo');
// constも定数
const KUDO = 'kudoryafuka';
echo NAME .PHP_EOL;
echo KUDO .PHP_EOL;

// ここに書いたテキストの改行や字下げは保持したまま、$textに代入される
// <<<の後は終端記号と呼ばれ、好きな名前をつけて良い
// $text = <<<'EOT'
// kudo
//   wahu-
// komarichan
// EOT;

// 中で変数を展開する場合は終端記号に''をつけない(heredoc)
$text = <<<EOT
$name kawaii

EOT;

echo $text;

# 中にはHTMLも書けるが、書かない場合は閉じタグは省略すべき