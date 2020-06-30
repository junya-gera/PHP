<?php

// クラス
class Post
{
  // プロパティ
  // public,privateをアクセス修飾子という。これらでこのクラスでは何ができて
  // 何ができないかを明確にしておくことをカプセル化という
  private $text;
  private $likes = 0; // 0で初期化。privateなのでクラスの外では操作できない

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

  public function like()
  {
    $this->likes++;
    if ($this->likes > 100){
      $this->likes = 100;
    }
  }
}

$posts = [];

$posts[0] = new Post('hello'); // インスタンス
// $posts[0]->text = 'hello';
// $posts[0]->likes = 0;

$posts[1] = new Post('hello again'); // インスタンス
// $posts[1]->text = 'hello again';
// $posts[1]->likes = 0;

$posts[0]->like();

$posts[0]->show();
$posts[1]->show();

