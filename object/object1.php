<?php

// クラス
class Post
{
  // プロパティ
  public $text;
  public $likes = 0; // 0で初期化

  // コンストラクタ
  public function __construct($text)
  {
    $this->text = $text;
  }

  // メソッド
  public function show()
  {
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }
}

$posts = [];

$posts[0] = new Post('hello'); // インスタンス
// $posts[0]->text = 'hello';
// $posts[0]->likes = 0;

$posts[1] = new Post('hello again'); // インスタンス
// $posts[1]->text = 'hello again';
// $posts[1]->likes = 0;

$posts[0]->show();
$posts[1]->show();